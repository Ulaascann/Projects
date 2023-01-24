const express = require('express');
const User = require('../models/userModel');

const router = express.Router();

router.post('/register', (req, res) => {
  const { name, email, password } = req.body;

  const newUser = new User({ name, email, password });

  try {
    newUser.save();
    res.send('Kullanıcı Kaydı Başarılı');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/login', async (req, res) => {
  const { email, password } = req.body;

  try {
    const user = await User.find({ email, password });

    if (user.length > 0) {
      res.send(user[0]);
    } else {
      return res.status(400).json({ message: 'Kullanıcı Girişi Hatalı' });
    }
  } catch (error) {
    return res
      .status(400)
      .json({ message: 'Hay aksi :( Bir şeyler ters gitti.' });
  }
});

router.get('/getallusers', async (req, res) => {
  try {
    const users = await User.find({});
    res.send(users);
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/deleteuser', async (req, res) => {
  const userid = req.body.userid;
  try {
    await User.findOneAndDelete({ _id: userid });
    res.send('Kullanıcı Başarıyla Silindi');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

module.exports = router;
