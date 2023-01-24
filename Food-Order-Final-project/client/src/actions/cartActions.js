export const addToCartAction =
  (menu, ozellik, miktar) => (dispatch, getState) => {
    var cartItem = {
      ad: menu.ad,
      _id: menu._id,
      img: menu.img,
      ozellik: ozellik,
      miktar: Number(miktar),
      fiyat: menu.fiyat,
      price: menu.fiyat[0][ozellik] * miktar,
    };

    if (cartItem.miktar > 10) {
      alert("Sepetinize 10'dan fazla ürün ekleyemezsiniz!");
    } else {
      if (cartItem.miktar < 1) {
        dispatch({ type: 'DELETE_FROM_CART', payload: menu });
      } else {
        dispatch({ type: 'ADD_TO_CART', payload: cartItem });
      }
    }

    const cartItems = getState().cartReducer.cartItems;

    localStorage.setItem('cartItems', JSON.stringify(cartItems));
  };

export const deleteFromCartAction = (menu) => (dispatch, getState) => {
  dispatch({ type: 'DELETE_FROM_CART', payload: menu });
  const cartItems = getState().cartReducer.cartItems;
  localStorage.setItem('cartItems', JSON.stringify(cartItems));
};
