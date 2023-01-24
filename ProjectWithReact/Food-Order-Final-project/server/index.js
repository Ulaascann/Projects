const express = require('express');
const cors = require('cors');
const db = require('./db.js');
// const burgerModel = require('./models/burgerModel.js');
const app = express();
app.use(express.json());
app.use(cors());

//router tanımlamaları
const burgersRoute = require('./routes/burgersRoute');
const userRoute = require('./routes/userRoute.js');
const ordersRoute = require('./routes/ordersRoute');

//başlangıç komutu
app.get('/', (req, res) => {
  res.send(`Server ${port} portunda çalışmaktadır`);
});

//routing blokları
app.use('/api/burgers/', burgersRoute);
app.use('/api/users/', userRoute);
app.use('/api/orders/', ordersRoute);

//serverımızı inşa edeceğimiz portu belirliyoruz. Server'ımızı dinliyoruz
const port = process.env.PORT || 5000;
app.listen(port, () =>
  console.log(`Hamburger Serverı ${port} portunda Çalışmaktadır...!`)
);
