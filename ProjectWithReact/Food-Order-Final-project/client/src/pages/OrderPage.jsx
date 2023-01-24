import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { getUserOrders } from '../actions/orderActions';
import Loading from '../components/Loading';
import Error from '../components/Error';

function OrderPage() {
  const dispatch = useDispatch();
  const orderstate = useSelector((state) => state.getUserOrdersReducer);
  const { orders, error, loading } = orderstate;
  useEffect(() => {
    dispatch(getUserOrders());
  }, []);

  return (
    <div className="container">
      <h2 style={{ fontSize: '35px' }} className="my-3">
        Siparişlerim
      </h2>
      <hr />
      <div className="row justify-content-center my-3 ">
        {loading && <Loading />}
        {error && <Error error="Bir şeyler ters gitti." />}
        {orders &&
          orders.map((order) => (
            <div
              className="col-md-12 my-2"
              style={{ backgroundColor: 'darkslategrey', color: 'springgreen' }}
            >
              <div className="flex-container">
                <div className="text-start w-100 m-1">
                  <h2 style={{ fontSize: '25px' }}>Sipariş Kalemleri</h2>
                  <hr />
                  {order.orderItems.map((item) => (
                    <div>
                      <p>
                        {item.ad} [{item.ozellik}] * {item.miktar} ={' '}
                        {item.price} ₺
                      </p>
                    </div>
                  ))}
                </div>
                <div className="text-start w-100 m-1">
                  <h2 style={{ fontSize: '25px' }}>Adres</h2>
                  <hr />
                  <p>Sokak: {order.shippingAddress.street}</p>
                  <p>Şehir: {order.shippingAddress.city}</p>
                  <p>Ülke: {order.shippingAddress.country}</p>
                  <p>Posta Kodu: {order.shippingAddress.pincode}</p>
                </div>
                <div className="text-start w-100 m-1">
                  <h2 style={{ fontSize: '25px' }}>Sipariş Bilgileri</h2>
                  <hr />
                  <p>Sipariş Tutarı: {order.orderAmount} ₺</p>
                  <p>Tarih: {order.createdAt.substring(0, 10)}</p>
                  <p>İşlem No: {order.transactionId}</p>
                  <p>Sipariş No: {order._id}</p>
                </div>
              </div>
            </div>
          ))}
      </div>
    </div>
  );
}

export default OrderPage;
