import { createStore, applyMiddleware, combineReducers } from 'redux';
import thunk from 'redux-thunk';
import { composeWithDevTools } from 'redux-devtools-extension';
import {
  getAllBurgersReducer,
  addBurgerReducer,
  getBurgerByIdReducer,
  editBurgerReducer,
} from './reducers/burgerReducers';
import { cartReducer } from './reducers/cartReducer';
import {
  loginUserReducer,
  registerUserReducer,
  getAllUsersReducer,
} from './reducers/userReducer';
import {
  checkoutOrderReducer,
  getUserOrdersReducer,
  getAllOrdersReducer,
} from './reducers/orderReducer';

const finalReducer = combineReducers({
  getAllBurgersReducer: getAllBurgersReducer,
  cartReducer: cartReducer,
  registerUserReducer: registerUserReducer,
  loginUserReducer: loginUserReducer,
  checkoutOrderReducer: checkoutOrderReducer,
  getUserOrdersReducer: getUserOrdersReducer,
  addBurgerReducer: addBurgerReducer,
  getBurgerByIdReducer: getBurgerByIdReducer,
  editBurgerReducer: editBurgerReducer,
  getAllOrdersReducer: getAllOrdersReducer,
  getAllUsersReducer: getAllUsersReducer,
});

const cartItems = localStorage.getItem('cartItems')
  ? JSON.parse(localStorage.getItem('cartItems'))
  : [];

const currentUser = localStorage.getItem('currentUser')
  ? JSON.parse(localStorage.getItem('currentUser'))
  : null;

const initialState = {
  cartReducer: {
    cartItems: cartItems,
  },
  loginUserReducer: {
    currentUser: currentUser,
  },
};

const composeEnhancers = composeWithDevTools({});

const store = createStore(
  finalReducer,
  initialState,
  composeEnhancers(applyMiddleware(thunk))
);

export default store;
