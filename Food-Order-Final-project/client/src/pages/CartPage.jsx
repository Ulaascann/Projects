import React from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { addToCartAction, deleteFromCartAction } from '../actions/cartActions';
import Checkout from '../components/Checkout';

function CartPage() {
  const cartState = useSelector((state) => state.cartReducer);

  const cartItems = cartState.cartItems;

  var toplamfiyat = cartItems.reduce((x, sepet) => x + sepet.price, 0);

  const dispatch = useDispatch();

  return (
    <div className="container">
      <div className="row justify-content-center my-3">
        <div className="col-md-8">
          <h2>Sepetim</h2>
          {cartItems.map((sepet) => (
            <div className="flex-container my-5">
              <div className="text-start w-100">
                <h3 className="text-success">{sepet.ad}</h3>
                <h4>
                  {sepet.miktar} adet {sepet.ozellik} boy ={' '}
                  <span className="text-danger">{sepet.price} ₺ </span>
                </h4>
                <h4 style={{ display: 'inline' }}>Miktar: </h4>
                <i
                  className="fa-solid fa-plus text-success"
                  style={{ cursor: 'pointer' }}
                  onClick={() => {
                    dispatch(
                      addToCartAction(sepet, sepet.ozellik, sepet.miktar + 1)
                    );
                  }}
                ></i>
                <b>
                  {' '}
                  <span style={{ fontSize: '20px' }}>{sepet.miktar}</span>{' '}
                </b>
                <i
                  className="fa-solid fa-minus text-danger"
                  style={{ cursor: 'pointer' }}
                  onClick={() => {
                    dispatch(
                      addToCartAction(sepet, sepet.ozellik, sepet.miktar - 1)
                    );
                  }}
                ></i>
                <hr />
              </div>

              <div className="m-1 w-75 ">
                <img
                  src={sepet.img}
                  alt={sepet.name}
                  style={{ height: '100px' }}
                />
              </div>

              <div className="m-1 w-100 text-start">
                <i
                  class="fa-solid fa-trash text-danger fs-4"
                  style={{ cursor: 'pointer' }}
                  onClick={() => dispatch(deleteFromCartAction(sepet))}
                ></i>
              </div>
            </div>
          ))}
        </div>

        <div className="col-md-4 text-end">
          <h2 className="text-danger" style={{ fontSize: '30px' }}>
            Toplam Fiyat: {toplamfiyat} ₺
          </h2>

          <Checkout toplamfiyat={toplamfiyat} />
        </div>
      </div>
    </div>
  );
}

export default CartPage;
