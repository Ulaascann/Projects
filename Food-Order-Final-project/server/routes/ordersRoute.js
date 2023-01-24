const express = require('express');
const stripe = require('stripe')(
  'sk_test_51LYZHGBQJL0KoSM5CPTKpZdXH5XisHSHhusi1WgY5vDn3ShZjhVW4jzyyt42QcUFowZdwSUnzbxufcnpIvQ1Dp1a00L9G71r7x'
);
const cors = require('cors');
const { v4: uuidv4 } = require('uuid');
const Order = require('../models/orderModel');
const router = express.Router();
const app = express();
app.use(cors());

router.post('/checkoutorder', async (req, res) => {
  const { token, toplamfiyat, currentUser, cartItems } = req.body;

  try {
    const customer = await stripe.customers.create({
      email: token.email,
      source: token.id,
    });

    const payment = await stripe.charges.create(
      {
        amount: toplamfiyat * 100,
        currency: 'TRY',
        customer: customer.id,
        receipt_email: token.email,
      },
      {
        idempotencyKey: uuidv4(),
      }
    );
    if (payment) {
      const neworder = new Order({
        name: currentUser.name,
        email: currentUser.email,
        userid: currentUser._id,
        orderItems: cartItems,
        orderAmount: toplamfiyat,
        shippingAddress: {
          street: token.card.address_line1,
          city: token.card.address_city,
          country: token.card.address_country,
          pincode: token.card.address_zip,
        },
        transactionId: payment.source.id,
      });

      neworder.save();

      res.send('Sipariş başarıyla alındı');
    } else {
      res.send('Ödeme Başarısız');
    }
  } catch (error) {
    return res
      .status(400)
      .json({ message: 'Hay Aksi. Bir şeyler ters gitti...', error });
  }
});

router.post('/getuserorders', async (req, res) => {
  const { userid } = req.body;

  try {
    const orders = await Order.find({ userid: userid }).sort({ _id: -1 });
    res.send(orders);
  } catch (error) {
    return res
      .status(400)
      .json({ message: 'Hak aksi. Bir şeyler ters gitti.' });
  }
});

router.get('/getallorders', async (req, res) => {
  try {
    const orders = await Order.find({});
    res.send(orders);
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/deliverorder', async (req, res) => {
  const orderid = req.body.orderid;
  try {
    const order = await Order.findOne({ _id: orderid });
    order.isDelivered = true;
    await order.save();
    res.send('Sipariş Başarıyla Teslim Edildi');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

module.exports = router;
