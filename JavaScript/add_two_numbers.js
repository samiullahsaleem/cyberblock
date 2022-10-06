"use strict";
const e = React.createElement;

const AddTwoNumbers = () => {
  const number1 = 10;
  const number2 = 20;
  const result = number1 + number2;

  return e("h1", {}, result);
};

const domContainer = document.querySelector("#add_two_numbers");
const root = ReactDOM.createRoot(domContainer);
root.render(e(AddTwoNumbers));
