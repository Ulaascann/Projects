const express = require('express');
const burgerModel = require('../models/burgerModel');
const router = express.Router();

// GET ALL BURGERS

router.get('/getburgers', (req, res) => {
  burgerModel.find({}, (err, result) => {
    if (err) {
      res.send(err);
    } else {
      res.send(result);
    }
  });
});

router.post('/addmenu', async (req, res) => {
  const menu = req.body.menu;

  try {
    const newmenu = new burgerModel({
      ad: menu.ad,
      ozellik: ['small', 'medium', 'mega'],
      img: menu.img,
      desc: menu.desc,
      kategori: menu.kategori,
      fiyat: [menu.fiyat],
    });
    await newmenu.save();
    res.send('Menü Ekleme Başarılı');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/getburgerbyid', async (req, res) => {
  const burgerid = req.body.burgerid;

  try {
    const burger = await burgerModel.findOne({ _id: burgerid });
    res.send(burger);
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/editmenu', async (req, res) => {
  const editedmenu = req.body.editedmenu;

  try {
    const burger = await burgerModel.findOne({ _id: editedmenu._id });

    (burger.ad = editedmenu.ad),
      (burger.desc = editedmenu.desc),
      (burger.img = editedmenu.img),
      (burger.kategori = editedmenu.kategori),
      (burger.fiyat = [editedmenu.fiyat]);

    await burger.save();

    res.send('Menü Detayları Başarıyla Güncellendi');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

router.post('/deletemenu', async (req, res) => {
  const burgerid = req.body.burgerid;

  try {
    await burgerModel.findOneAndDelete({ _id: burgerid });
    res.send('Menü Başarıyla Silindi');
  } catch (error) {
    return res.status(400).json({ message: error });
  }
});

module.exports = router;
