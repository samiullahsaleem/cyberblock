
import './App.css';
import React, { useState ,useEffect} from "react";
import Contributers from './Contributers';
function App() {

  //console.log(typeof(Contributers));
  const [theme, setTheme] = useState('light');
  const toggleTheme = () => {
    if (theme === 'light') {
      setTheme('dark');
    } else {
      setTheme('light');
    }
  };
  useEffect(() => {
    document.body.className = theme;
  }, [theme]);
  return (
    <div className={`App ${theme}`}>
      <button onClick={toggleTheme}>DarkMode App</button>
      <h1>Hello from CyberBlock!</h1>
      <div className='listuser'>
      {Contributers.map((eleme) => (
     
         
        
            <a href={eleme.gitUrl} >
              <img src={eleme.imagrUrl} width="100" />
              <br />
              <sub>
                <b >{eleme.userName}</b>
              </sub>
            </a>
          
       
      ))}
        </div>
    </div>
  );
}

export default App;
