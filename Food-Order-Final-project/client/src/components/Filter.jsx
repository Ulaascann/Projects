import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { filterBurgers } from '../actions/burgerAction';

function Filter() {
  const dispatch = useDispatch();
  const [searchvalue, setsearchvalue] = useState('');
  const [kategori, setKategori] = useState('hepsi');
  return (
    <div>
      <div className="row justify-content-center mt-2 shadow-lg p-3 bg-white rounded">
        <div className="col-md-2 ">
          <input
            value={searchvalue}
            onChange={(e) => setsearchvalue(e.target.value)}
            style={{ margin: '0' }}
            type="text"
            className="form-control"
            placeholder="Aradığınız menüyü yazın"
          />
        </div>
        <div className="col-md-2 ">
          <select
            name=""
            id=""
            className="form-select"
            value={kategori}
            onChange={(e) => setKategori(e.target.value)}
          >
            <option value="hepsi">Hepsi</option>
            <option value="et">Et Menü</option>
            <option value="tavuk">Tavuk Menü</option>
          </select>
        </div>
        <div className="col-md-2">
          <button
            className="btn btn-danger w-100"
            onClick={() => {
              dispatch(filterBurgers(searchvalue, kategori));
            }}
          >
            Filtrele
          </button>
        </div>
      </div>
    </div>
  );
}

export default Filter;
