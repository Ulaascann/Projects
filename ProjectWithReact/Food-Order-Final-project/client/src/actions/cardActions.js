export const addtocartaction = (food, quantity, varient) => (dispatch) => {
  var cartItem = {
    name: food.name,
    _id: food._id,
    img: food.img,
    varient: food.varient,
    quantity: food.quantity,
    prices: food.prices,
    price: food.prices[0][varient] * quantity,
  };
  dispatch({ type: "ADD_TO_CART", payload: cartItem });
};
