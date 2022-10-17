import { useState } from "react";
import React from "react";
function App() {
  const [count, setCount] = useState(0);

  function counter_color_set() {
    if (count === 0) {
      return <h2 style={{ color: "red" }}>{count}</h2>;
    } else {
      return <h2 style={{ color: "black" }}>{count}</h2>;
    }
  }

  return (
    <div className='container my-5'>
      <div className='card text-center my-5'>
        <div className='card-body'>
          <h1>Counter App</h1>
          <div className='my-5'>
            <h2 className='my-5'>{counter_color_set()}</h2>
            <button
              className='btn btn-success mx-3'
              onClick={() => setCount((p) => p + 1)}
            >
              +
            </button>
            <button
              className='btn btn-danger mx-3'
              onClick={count === 0 ? null : () => setCount((p) => p - 1)}
            >
              -
            </button>
            <button
              className='btn btn-secondary mx-3'
              onClick={() => setCount(0)}
            >
              Reset
            </button>
          </div>
        </div>
      </div>
    </div>
  );
}

export default App;
