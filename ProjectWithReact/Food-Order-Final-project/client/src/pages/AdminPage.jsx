import React, { useEffect } from 'react';
import { useSelector, useDispatch } from 'react-redux';
import { Route, Routes, Link } from 'react-router-dom';
import UsersList from './UsersList';
import OrdersList from './OrdersList';
import MenusList from './MenusList';
import AddMenu from './AddMenu';
import EditMenu from './EditMenu';

function AdminPage() {
  const userState = useSelector((state) => state.loginUserReducer);

  const { currentUser } = userState;

  const dispatch = useDispatch();

  useEffect(() => {
    if (!currentUser.isAdmin) {
      window.location.href = '/';
    }
  }, []);

  return (
    <div>
      <div className="row justify-content-center">
        <div className="col-md-10">
          <h2 style={{ fontSize: '35px' }}>Admin Panel</h2>

          <ul className="admin-class">
            <li>
              <Link to="userslist">Kullanıcı Listesi</Link>
            </li>
            <li>
              <Link to="menulist">Menü Listesi</Link>
            </li>
            <li>
              <Link to="addmenu">Yeni Menü Ekle</Link>
            </li>
            <li>
              <Link to="orderslist">Sipariş Listesi</Link>
            </li>
          </ul>

          <Routes>
            <Route path="userslist" element={<UsersList />} />
            <Route path="orderslist" element={<OrdersList />} />
            <Route path="menulist" element={<MenusList />} />
            <Route path="addmenu" element={<AddMenu />} />
            <Route path="editmenu/:burgerid" element={<EditMenu />} />
          </Routes>
        </div>
      </div>
    </div>
  );
}

export default AdminPage;
