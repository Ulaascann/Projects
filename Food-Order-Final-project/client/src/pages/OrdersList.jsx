import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { deliverOrder, getAllOrders } from '../actions/orderActions';
import Error from '../components/Error';
import Filter from '../components/Filter';
import Loading from '../components/Loading';

function OrdersList() {
  const dispatch = useDispatch();
  const getordersstate = useSelector((state) => state.getAllOrdersReducer);

  const { loading, error, orders } = getordersstate;

  useEffect(() => {
    dispatch(getAllOrders());
  }, []);

  return (
    <div>
      {loading && <Loading />}
      {error && <Error error="Bir şeyler ters gitti" />}
      <table className="table table-dark table-striped">
        <thead className="text-dark">
          <th>Sipariş ID</th>
          <th>Email</th>
          <th>Kullanıcı ID</th>
          <th>Fiyat</th>
          <th>Tarih</th>
          <th>Durum</th>
        </thead>
        <tbody>
          {orders &&
            orders.map((order) => (
              <tr>
                <td>{order._id}</td>
                <td>{order.email}</td>
                <td>{order.userid}</td>
                <td>{order.orderAmount}</td>
                <td>{order.createdAt.substring(0.1)}</td>
                <td>
                  {order.isDelivered ? (
                    <h2 style={{ fontSize: '15px' }}>Teslim Edildi</h2>
                  ) : (
                    <button
                      className="btn btn-warning"
                      onClick={() => {
                        dispatch(deliverOrder(order._id));
                      }}
                    >
                      Teslimat
                    </button>
                  )}
                </td>
              </tr>
            ))}
        </tbody>
      </table>
    </div>
  );
}

export default OrdersList;
