import React, { useState, useEffect } from 'react';
import { useDispatch, useSelector } from 'react-redux';
import { deleteUser, getAllUsers } from '../actions/userActions';
import Error from '../components/Error';
import Filter from '../components/Filter';
import Loading from '../components/Loading';

function UsersList() {
  const dispatch = useDispatch();

  const usersstate = useSelector((state) => state.getAllUsersReducer);

  const { error, loading, users } = usersstate;

  useEffect(() => {
    dispatch(getAllUsers());
  }, []);

  return (
    <div>
      <h1>User List</h1>

      {loading && <Loading />}
      {error && <Error error="Bir şeyler ters gitti" />}
      <table className="table table-dark table-striped table-bordered">
        <thead className="text-light">
          <tr>
            <th>Kullanıcı ID</th>
            <th>Kullanıcı Adı</th>
            <th>Email</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          {users &&
            users.map((user) => (
              <tr>
                <td>{user._id}</td>
                <td>{user.name}</td>
                <td>{user.email}</td>
                <td>
                  <i
                    className="fa fa-trash text-danger"
                    style={{ cursor: 'pointer' }}
                    onClick={() => dispatch(deleteUser(user._id))}
                  ></i>
                </td>
              </tr>
            ))}
        </tbody>
      </table>
    </div>
  );
}

export default UsersList;
