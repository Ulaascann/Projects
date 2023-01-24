import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { getAllBurgers } from '../actions/burgerAction';
import Error from '../components/Error';
import Filter from '../components/Filter';
import Loading from '../components/Loading';
import MenuList from '../components/MenuList';
import menuler from '../yemekdata';

function HomePage() {
  const dispatch = useDispatch();

  const burgerState = useSelector((state) => state.getAllBurgersReducer);

  const { burgers, error, loading } = burgerState;

  useEffect(() => {
    dispatch(getAllBurgers());
  }, []);

  return (
    <div>
      <Filter />
      <div className="row">
        {loading ? (
          <Loading />
        ) : error ? (
          <Error error="Hay aksi.. Bir şeyler ters gitti" />
        ) : (
          burgers.map((menu) => (
            <div className="col-md-4" key={menu._id}>
              <div>
                <MenuList menu={menu} />
              </div>
            </div>
          ))
        )}
      </div>
    </div>
  );
}

export default HomePage;
