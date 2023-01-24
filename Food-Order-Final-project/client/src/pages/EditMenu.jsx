import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { useParams } from 'react-router-dom';
import { editMenu, getBurgerById } from '../actions/burgerAction';
import Error from '../components/Error';
import Loading from '../components/Loading';
import Success from '../components/Success';

function EditMenu() {
  const [ad, setad] = useState('');
  const [smallprice, setsmallprice] = useState('');
  const [mediumprice, setmediumprice] = useState('');
  const [megaprice, setmegaprice] = useState('');
  const [img, setimg] = useState('');
  const [desc, setdesc] = useState('');
  const [kategori, setkategori] = useState('');

  const getburgerbyidstate = useSelector((state) => state.getBurgerByIdReducer);

  const { burger, error, loading } = getburgerbyidstate;

  const editburgerstate = useSelector((state) => state.editBurgerReducer);
  const { editloading, editerror, editsuccess } = editburgerstate;

  var { burgerid } = useParams();
  const dispatch = useDispatch();

  useEffect(() => {
    if (burger) {
      if (burger._id === burgerid) {
        setad(burger?.ad || 'muhammet');
        setdesc(burger.desc);
        setkategori(burger.kategori);
        setsmallprice(burger.fiyat[0]['small']);
        setmediumprice(burger.fiyat[0]['medium']);
        setmegaprice(burger.fiyat[0]['mega']);
        setimg(burger.img);
      } else {
        dispatch(getBurgerById(burgerid));
      }
    } else {
      dispatch(getBurgerById(burgerid));
    }
  }, [burger, dispatch]);
  console.log('Hata tespit : ', burger);

  function formHandler(e) {
    e.preventDefault();

    const editedmenu = {
      _id: burgerid,
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
    dispatch(editMenu(editedmenu));
  }

  return (
    <div>
      <h1>Menü Güncelle</h1>
      {/* <h1>Menü Id: {burgerid}</h1> */}
      <h1>Menü ID: {burgerid}</h1>

      <div className="text-start">
        {loading && <Loading />}
        {error && <Error error="Bir şeyler ters gitti." />}
        {editsuccess && (
          <Success success="Menü detayları başarıyla güncellendi" />
        )}
        {editloading && <Loading />}

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
            Menüyü Güncelle
          </button>
        </form>
      </div>
    </div>
  );
}

export default EditMenu;
