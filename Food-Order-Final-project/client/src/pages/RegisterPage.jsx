import React from 'react';
import { useEffect, useState } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { Link } from 'react-router-dom';
import { registerUser } from '../actions/userActions';

function RegisterPage() {
  const [name, setname] = useState('');
  const [email, setemail] = useState('');
  const [password, setpassword] = useState('');
  const [onaypassword, setonaypassword] = useState('');

  const dispatch = useDispatch();

  function kaydolHandler() {
    if (password != onaypassword) {
      alert('Şifreler Eşleşmemektedir!');
    } else {
      const user = {
        name,
        email,
        password,
      };
      console.log(user);
      dispatch(registerUser(user));
    }
  }

  return (
    <div>
      <div className="row justify-content-center mt-5">
        <div className="col-md-5 text-start">
          <div>
            <h1 className="my-3 text-center">Kullanıcı Oluştur</h1>
            <input
              required
              type="text"
              placeholder="İsminizi Giriniz"
              className="form-control "
              value={name}
              onChange={(e) => setname(e.target.value)}
            />
            <input
              required
              type="email"
              placeholder="Emailinizi Giriniz"
              className="form-control "
              value={email}
              onChange={(e) => setemail(e.target.value)}
            />
            <input
              required
              type="password"
              placeholder="Şifrenizi Giriniz"
              className="form-control "
              value={password}
              onChange={(e) => setpassword(e.target.value)}
            />
            <input
              required
              type="password"
              placeholder="Şifreyi Onayla"
              className="form-control "
              value={onaypassword}
              onChange={(e) => setonaypassword(e.target.value)}
            />
            <button onClick={kaydolHandler} className="btn btn-danger mt-2">
              KAYIT OL
            </button>
            <br />
            <button className="btn btn-success my-2">
              <Link
                to="/giris"
                style={{ textDecoration: 'none', color: 'black' }}
              >
                {' '}
                Giriş İçin Tıkla
              </Link>
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default RegisterPage;
