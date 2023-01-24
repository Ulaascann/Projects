import axios from 'axios';

//Register Action
export const registerUser = (user) => async (dispatch) => {
  dispatch({ type: 'USER_REGISTER_REQUEST' });

  try {
    const response = await axios.post(
      'http://localhost:5000/api/users/register',
      user
    );
    console.log('Response', response);
    dispatch({ type: 'USER_REGISTER_SUCCESS' });
  } catch (error) {
    dispatch({ type: 'USER_REGISTER_FAILED', payload: error });
  }
};

//Login Action
export const loginUser = (user) => async (dispatch) => {
  dispatch({ type: 'USER_LOGIN_REQUEST' });

  try {
    const response = await axios.post(
      'http://localhost:5000/api/users/login',
      user
    );
    console.log(response);
    dispatch({ type: 'USER_LOGIN_SUCCESS', payload: response.data });
    localStorage.setItem('currentUser', JSON.stringify(response.data));
    window.location.href = '/';
  } catch (error) {
    dispatch({ type: 'USER_LOGIN_FAILED', payload: error });
  }
};

export const logoutUser = () => {
  localStorage.removeItem('currentUser');
  window.location.href = '/giris';
};

export const getAllUsers = () => async (dispatch) => {
  dispatch({ type: 'GET_USERS_REQUEST' });

  try {
    const response = await axios.get(
      'http://localhost:5000/api/users/getallusers'
    );
    console.log(response);
    dispatch({ type: 'GET_USERS_SUCCESS', payload: response.data });
  } catch (error) {
    dispatch({ type: 'GET_USERS_FAILED', payload: error });
  }
};

export const deleteUser = (userid) => async (dispatch) => {
  try {
    await axios.post('http://localhost:5000/api/users/deleteuser', { userid });
    alert('Kullanıcı Başarıyla Silindi');
    window.location.reload();
  } catch (error) {
    alert('Hay aksi.. Bir şeyler ters gitti...');
    console.log(error);
  }
};
