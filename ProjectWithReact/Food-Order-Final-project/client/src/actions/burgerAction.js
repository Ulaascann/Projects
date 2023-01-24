import axios from 'axios';

export const getAllBurgers = () => async (dispatch) => {
  dispatch({ type: 'GET_BURGERS_REQUEST' });

  try {
    const response = await axios.get(
      'http://localhost:5000/api/burgers/getburgers'
    );
    console.log(response);
    dispatch({ type: 'GET_BURGERS_SUCCESS', payload: response.data });
  } catch (error) {
    dispatch({ type: 'GET_BURGERS_FAILED', payload: error });
  }
};

export const filterBurgers = (searchvalue, kategori) => async (dispatch) => {
  var filteredBurgers;
  dispatch({ type: 'GET_BURGERS_REQUEST' });

  try {
    const response = await axios.get(
      'http://localhost:5000/api/burgers/getburgers'
    );
    filteredBurgers = response.data.filter((burger) =>
      burger.ad.toLowerCase().includes(searchvalue)
    );

    if (kategori != 'hepsi') {
      filteredBurgers = response.data.filter(
        (burger) => burger.kategori.toLowerCase() == kategori
      );
    }
    dispatch({ type: 'GET_BURGERS_SUCCESS', payload: filteredBurgers });
  } catch (error) {
    dispatch({ type: 'GET_BURGERS_FAILED', payload: error });
  }
};

export const addMenu = (menu) => async (dispatch) => {
  dispatch({ type: 'ADD_BURGER_REQUEST' });

  try {
    const response = await axios.post(
      'http://localhost:5000/api/burgers/addmenu',
      { menu }
    );
    console.log(response);
    dispatch({ type: 'ADD_BURGER_SUCCESS' });
    window.location.href = '/admin/menulist';
  } catch (error) {
    dispatch({ type: 'ADD_BURGER_ERROR' });
  }
};

export const editMenu = (editedmenu) => async (dispatch) => {
  dispatch({ type: 'EDIT_BURGER_REQUEST' });

  try {
    const response = await axios.post(
      'http://localhost:5000/api/burgers/editmenu',
      { editedmenu }
    );
    console.log(response);
    dispatch({ type: 'EDIT_BURGER_SUCCESS' });
    window.location.href = '/admin/menulist';
  } catch (error) {
    dispatch({ type: 'EDIT_BURGER_ERROR' });
  }
};

export const deleteMenu = (burgerid) => async (dispatch) => {
  try {
    const response = await axios.post(
      'http://localhost:5000/api/burgers/deletemenu',
      { burgerid }
    );
    console.log(response);
    alert('Menü Başarıyla Silindi');
    window.location.reload();
  } catch (error) {
    alert('Bir şeyler ters gitti');
    console.log(error);
  }
};

export const getBurgerById = (burgerid) => async (dispatch) => {
  dispatch({ type: 'GET_BURGER_BY_ID_REQUEST' });

  try {
    const response = await axios.post(
      'http://localhost:5000/api/burgers/getburgerbyid',
      { burgerid }
    );
    console.log(response);
    dispatch({ type: 'GET_BURGER_BY_ID_SUCCESS', payload: response.data });
  } catch (error) {
    dispatch({ type: 'GET_BURGER_BY_ID_FAILED', payload: error });
  }
};
