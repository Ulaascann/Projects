import React, { useState } from 'react';
import { Modal } from 'react-bootstrap';
import { useDispatch, useSelector } from 'react-redux';
import { addToCartAction } from '../actions/cartActions';

function MenuList({ menu }) {
  const [miktar, setMiktar] = useState(1);
  const [ozellik, setOzellik] = useState('small');

  // modal için hazırladığımız kısım
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);
  // modal için hazırladığımız kısım bitişi

  const dispatch = useDispatch();
  function addToCart() {
    dispatch(addToCartAction(menu, ozellik, miktar));
  }

  return (
    <div>
      <div className="bg-light shadow-lg mt-5 p-3">
        <div onClick={handleShow}>
          <h1>{menu.ad}</h1>
          <img
            src={menu.img}
            className="img-fluid"
            style={{ height: '200px' }}
            alt=""
          />
        </div>

        <div className="flex-container">
          <div className="w-100">
            <p>Özellikler</p>
            <select
              className="form-select"
              value={ozellik}
              onChange={(e) => setOzellik(e.target.value)}
            >
              {menu.ozellik.map((varient) => (
                <option value={varient}>{varient}</option>
              ))}
            </select>
          </div>
          <div className="w-100">
            <p>Miktar</p>
            <select
              className="form-select"
              value={miktar}
              onChange={(e) => setMiktar(e.target.value)}
            >
              {[...Array(10).keys()].map((x, i) => {
                return <option value={i + 1}>{i + 1}</option>;
              })}
            </select>
          </div>
        </div>
        <div className="flex-container">
          <div className="m-1 w-100 mt-4">
            <h1>Fiyat: {menu.fiyat[0][ozellik] * miktar} TL</h1>
          </div>
          <div className="m-1 w-100 mt-3">
            <button className="btn btn-success" onClick={addToCart}>
              Sepete Ekle
            </button>
          </div>
        </div>

        {/* Bu alan Modal'ı düzenlediğimiz alandır */}

        <Modal show={show} onHide={handleClose}>
          <Modal.Header closeButton>
            <Modal.Title>{menu.ad}</Modal.Title>
          </Modal.Header>
          <Modal.Body>
            <img
              src={menu.img}
              alt=""
              className="img-fluid"
              style={{ height: '350px' }}
            />
            <h1>Kategori: {menu.kategori}</h1>
            <p>{menu.desc}</p>
          </Modal.Body>
          <Modal.Footer>
            <button className="btn btn-success" onClick={handleClose}>
              Kapat
            </button>
          </Modal.Footer>
        </Modal>
      </div>
    </div>
  );
}

export default MenuList;
