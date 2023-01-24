import React, { useState } from "react";
import { Modal } from "react-bootstrap";
import { useDispatch, useSelector } from "react-redux";
import { addtocartaction } from "../actions/cardActions";

function Foods({ food }) {
  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const addtocart = () => {
    dispatch(addtocartaction(food, quantity, varient));
  };
  const [quantity, setQuantity] = useState(1);
  const [varient, setVarient] = useState("small");
  const dispatch = useDispatch();

  return (
    <div className="bg-light mt-5 shadow-lg p-3">
      <div onClick={handleShow}>
        <h1>{food.name}</h1>
        <img src={food.img} style={{ height: "200px" }} className="img-fluid" />
      </div>
      <div className="flex-container">
        <div className="w-100">
          <p>Seçenekler</p>

          <select
            className="form-select"
            value={varient}
            onChange={(e) => setVarient(e.target.value)}
          >
            {food.varient.map((varients) => (
              <option value={varients}>{varients}</option>
            ))}
          </select>
        </div>
        <div className="w-100">
          <p>Miktar</p>
          <select
            className="form-select"
            value={quantity}
            onChange={(e) => setQuantity(e.target.value)}
          >
            {[...Array(10).keys()].map((x, i) => {
              return <option value={i + 1}>{i + 1}</option>;
            })}
          </select>
        </div>
      </div>

      <div className="flex-container">
        <div className="m-1 w-100 mt-3">
          <h1>Fiyat: {food.prices[0][varient] * quantity} TL</h1>
          <div className="m-1 w-100 mt-3">
            <button className="btn" onClick={addtocart}>
              Sepete Ekle
            </button>
          </div>
        </div>
      </div>

      <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton>
          <Modal.Title>{food.name}</Modal.Title>
        </Modal.Header>
        <Modal.Body>
          <img src={food.img} className="img-fluid" />
          <h1>Kategori: {food.category}</h1>
          <p>{food.desc}</p>
        </Modal.Body>
        <Modal.Footer>
          <button className="btn" onClick={handleClose}>
            Kapat
          </button>
        </Modal.Footer>
      </Modal>
    </div>
  );
}

export default Foods;
