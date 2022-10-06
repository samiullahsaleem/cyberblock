"use strict";
const e = React.createElement;

const MultiplyTwoNumbers = () => {
  const number1 = 10;
  const number2 = 20;
  const result = number1 * number2;

  return e("h1", {}, result);
};

const domContainer = document.querySelector("#multiply_two_numbers");
const root = ReactDOM.createRoot(domContainer);
root.render(e(MultiplyTwoNumbers));
