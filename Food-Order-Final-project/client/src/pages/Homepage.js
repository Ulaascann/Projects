import React, { useEffect, useState } from "react";
import Foods from "../components/Foods";
import axios from "axios";
import { useDispatch, useSelector } from "react-redux";
import { getAllFoods } from "../actions/foodActions";

function Homepage() {
  // const [foods, setFoods] = useState([]);

  // useEffect(() => {
  //   axios
  //     .get("http://localhost:1001/getfoods")
  //     .then((response) => {
  //       setFoods(response.data);
  //     })
  //     .catch((err) => console.log(err));
  // }, []);

  const dispatch = useDispatch();

  const foodsstate = useSelector((state) => state.getAllFoodsReducer);

  const { foods, error, loading } = foodsstate;

  useEffect(() => {
    dispatch(getAllFoods());
  }, []);

  console.log(foods);

  return (
    <div>
      <div className="row">
        {loading ? (
          <h1>Loading..</h1>
        ) : error ? (
          <h1>something went wrong</h1>
        ) : (
          foods.map((food) => (
            <div className="col-md-4">
              <Foods food={food} />
            </div>
          ))
        )}
      </div>
    </div>
  );
}

export default Homepage;
