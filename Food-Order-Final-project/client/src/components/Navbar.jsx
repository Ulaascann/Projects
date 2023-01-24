import React from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { Link } from 'react-router-dom';
import { logoutUser } from '../actions/userActions';

function Navbar() {
  const cartState = useSelector((state) => state.cartReducer);
  const userState = useSelector((state) => state.loginUserReducer);

  const { currentUser } = userState;

  const dispatch = useDispatch();

  return (
    <div>
      <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
        <div className="container-fluid">
          <Link className="navbar-brand" to="/">
            K-365 FOODS
          </Link>
          <button
            className="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span className="navbar-toggler-icon" />
          </button>

          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav ml-auto">
              <li className="nav-item">
                <Link className="nav-link" to="/">
                  Menüler
                </Link>
              </li>
            </ul>
            <ul className="navbar-nav ms-auto">
              {currentUser && currentUser ? (
                <div
                  class="collapse navbar-collapse"
                  id="navbarNavDarkDropdown"
                >
                  <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                      <Link
                        class="nav-link dropdown-toggle"
                        to="#"
                        id="navbarDarkDropdownMenuLink"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        Hoşgeldiniz {currentUser.name}
                      </Link>
                      <ul
                        class="dropdown-menu dropdown-menu-dark"
                        aria-labelledby="navbarDarkDropdownMenuLink"
                      >
                        <li>
                          <Link class="dropdown-item" to="/orders">
                            Siparişler
                          </Link>
                        </li>
                        <li
                          onClick={() => {
                            logoutUser();
                          }}
                        >
                          <a class="dropdown-item">Çıkış</a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
              ) : (
                // <li className="nav-link">
                //   <span className="text-light">Hoşgeldiniz</span>{' '}
                //   <i>
                //     <b>{currentUser.name}</b>
                //   </i>
                // </li>
                <li className="nav-item">
                  <Link className="nav-link" to="/giris">
                    Giriş
                  </Link>
                </li>
              )}
              <li className="nav-item">
                <Link className="nav-link" to="/sepet">
                  Sepet ({cartState.cartItems.length})
                </Link>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  );
}

export default Navbar;
