import React from 'react';
import StripeCheckout from 'react-stripe-checkout';
import { useDispatch, useSelector } from 'react-redux';
import { checkoutOrder } from '../actions/orderActions';
import Error from '../components/Error';
import Success from '../components/Success';
import Loading from '../components/Loading';

function Checkout({ toplamfiyat }) {
  const orderstate = useSelector((state) => state.checkoutOrderReducer);
  const { loading, error, success } = orderstate;
  const dispatch = useDispatch();

  function tokenHandler(token) {
    console.log(token);
    dispatch(checkoutOrder(token, toplamfiyat));
  }

  console.log(toplamfiyat);

  return (
    <div>
      {loading && <Loading />}
      {error && <Error error="Hay aksi. Bir şeyler ters gitti..." />}
      {success && <Success success="Siparişiniz başarıyla alındı." />}
      <StripeCheckout
        amount={toplamfiyat * 100}
        shippingAddress
        billingAddress
        token={tokenHandler}
        stripeKey="pk_test_51LYZHGBQJL0KoSM56UW2MWpfBvULInaLRrajjpsSvtkqD4N2wxeOUE9rgq0n8TF1oBWR4YwzM7wSPrIfeOaOdNJQ00xP1kUp8J"
        currency="TRY"
      >
        <button className="btn btn-outline-success my-3">Şimdi Öde</button>
      </StripeCheckout>
    </div>
  );
}

export default Checkout;
