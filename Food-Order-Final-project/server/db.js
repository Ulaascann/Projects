const mongoose = require('mongoose');

var mongoURL =
  'mongodb+srv://barbaros:1234@cluster0.fwyfxfa.mongodb.net/burger-order?retryWrites=true&w=majority';

mongoose.connect(mongoURL);

var db = mongoose.connection;

db.on('connected', () => {
  console.log('Mongo DB Bağlantısı Başarılı');
});

db.on('error', () => {
  console.log('Mongo DB Bağlantısı Hatalı');
});

module.exports = mongoose;
