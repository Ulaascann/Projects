import React, { useState } from 'react';
import { Form } from 'react-bootstrap';
import { useDispatch, useSelector } from 'react-redux';
import { addMenu } from '../actions/burgerAction';
import Error from '../components/Error';
import Loading from '../components/Loading';
import Success from '../components/Success';

function AddMenu() {
  const [ad, setad] = useState('');
  const [smallprice, setsmallprice] = useState('');
  const [mediumprice, setmediumprice] = useState('');
  const [megaprice, setmegaprice] = useState('');
  const [img, setimg] = useState('');
  const [desc, setdesc] = useState('');
  const [kategori, setkategori] = useState('');

  const dispatch = useDispatch();

  const addmenustate = useSelector((state) => state.addBurgerReducer);

  const { success, error, loading } = addmenustate;

  function formHandler(e) {
    e.preventDefault();

    const menu = {
      ad,
      img,
      desc,
      kategori,
      fiyat: {
        small: smallprice,
        medium: mediumprice,
        mega: megaprice,
      },
    };

    console.log(menu);
    dispatch(addMenu(menu));
  }

  return (
    <div>
      <div className="text-start">
        <h1>Menü Ekle</h1>
        {loading && <Loading />}
        {error && <Error error="Bir şeyler ters gitti." />}
        {success && <Success success="Menü Ekleme Başarılı" />}

        <form onSubmit={formHandler}>
          <input
            type="text"
            placeholder="Menü Adı"
            value={ad}
            className="form-control"
            onChange={(e) => setad(e.target.value)}
          />
          <input
            type="text"
            placeholder="Küçük Boy Fiyatı"
            className="form-control"
            value={smallprice}
            onChange={(e) => setsmallprice(e.target.value)}
          />
          <input
            type="text"
            placeholder="Orta Boy Fiyatı"
            className="form-control"
            value={mediumprice}
            onChange={(e) => setmediumprice(e.target.value)}
          />
          <input
            type="text"
            placeholder="Mega Boy Fiyatı"
            className="form-control"
            value={megaprice}
            onChange={(e) => setmegaprice(e.target.value)}
          />
          <input
            type="text"
            placeholder="Kategori "
            className="form-control"
            value={kategori}
            onChange={(e) => setkategori(e.target.value)}
          />
          <input
            type="text"
            placeholder="Açıklama "
            className="form-control"
            value={desc}
            onChange={(e) => setdesc(e.target.value)}
          />
          <input
            type="text"
            placeholder="Fotoğraf Linki"
            className="form-control"
            value={img}
            onChange={(e) => setimg(e.target.value)}
          />
          <button className="btn btn-success my-3" type="submit">
            Menüyü Kaydet
          </button>
        </form>
      </div>
    </div>
  );
}

export default AddMenu;
