import './App.css';
import { useState } from 'react';

function App() {
  const [counter, setcounter] = useState(0)
  const [isLit, setLit] = useState(true);

  return (
    <>
      <h1 className='heading'>Counter Value {counter}</h1>
      <div className='button'>
      <button onClick={() => setcounter(counter + 1)} className="button1">Increment</button>
      <button onClick={() => setcounter(counter - 1)} className="button2">Decrement</button>
      {/* <button onClick={() => counter()}>Reset</button> */}
      </div>
      <div className="room">the room is lit</div>
    </>
  );
}

export default App;

