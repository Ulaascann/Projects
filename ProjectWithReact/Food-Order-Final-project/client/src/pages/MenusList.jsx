import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { deleteMenu, getAllBurgers } from '../actions/burgerAction';
import Error from '../components/Error';
import Filter from '../components/Filter';
import Loading from '../components/Loading';
import { Link, useParams } from 'react-router-dom';

function MenusList() {
  const dispatch = useDispatch();

  const burgerState = useSelector((state) => state.getAllBurgersReducer);

  const { burgers, error, loading } = burgerState;

  useEffect(() => {
    dispatch(getAllBurgers());
  }, []);

  return (
    <div>
      <h2 style={{ fontSize: '25px' }}>Menü Listesi</h2>
      {loading && <Loading />}
      {error && <Error error="Bir şeyler ters gitti" />}

      <table className="table table-striped table-dark">
        <thead>
          <tr>
            <th>Ad</th>
            <th>Fiyat</th>
            <th>Kategori</th>
            <th>İşlemler</th>
          </tr>
        </thead>
        <tbody>
          {burgers &&
            burgers.map((burger) => (
              <tr>
                <td>{burger.ad}</td>
                <td>
                  Küçük: {burger.fiyat[0]['small']}
                  <br />
                  Orta: {burger.fiyat[0]['medium']}
                  <br />
                  Büyük: {burger.fiyat[0]['mega']}
                  <br />
                </td>
                <td>{burger.kategori}</td>
                <td>
                  <i
                    className="fa fa-trash text-danger m-3"
                    onClick={() => {
                      dispatch(deleteMenu(burger._id));
                    }}
                    style={{ cursor: 'pointer' }}
                  ></i>

                  <Link to={`/admin/editmenu/${burger._id}`}>
                    <i className="fa fa-edit text-info"></i>
                  </Link>
                </td>
              </tr>
            ))}
        </tbody>
      </table>
    </div>
  );
}

export default MenusList;
