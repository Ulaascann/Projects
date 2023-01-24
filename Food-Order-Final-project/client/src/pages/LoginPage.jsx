import React, { useState, useEffect } from 'react';

import { useDispatch } from 'react-redux';
import { Link } from 'react-router-dom';
import { loginUser } from '../actions/userActions';

function LoginPage() {
  const [email, setemail] = useState('');
  const [password, setpassword] = useState('');
  const dispatch = useDispatch();

  useEffect(() => {
    if (localStorage.getItem('currentUser')) {
      window.location.href = '/';
    }
  }, []);
  function login() {
    const user = { email, password };
    dispatch(loginUser(user));
  }

  return (
    <div>
      <div className="row justify-content-center mt-5">
        <div className="col-md-5 text-start">
          <div>
            <h1 className="my-3 text-center">Kullanıcı Girişi</h1>

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

            <button onClick={login} className="btn btn-danger mt-2">
              GİRİŞ
            </button>
            <br />
            <button className="btn btn-success my-2">
              <Link
                to="/kaydol"
                style={{ textDecoration: 'none', color: 'black' }}
              >
                {' '}
                Kayıt İçin Tıkla
              </Link>
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default LoginPage;
