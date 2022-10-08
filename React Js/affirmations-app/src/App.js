import { useEffect, useState } from "react";
import { v4 as uuidv4 } from "uuid";
import "./App.css";

function App() {
  const colors = [
    "#5e4e9c",
    "#0080c4",
    "#0092d6",
    "#00a989",
    "#ffce0b",
    "#f941cc",
    "#ab3e8f",
    "#e83f68",
  ];

  const [index, setIndex] = useState(0);
  const [currentAff, setCurrentAff] = useState(0);
  const [affirmations, setAffirmations] = useState([
    "Everything has cracks - that's how the light gets in",
  ]);

  const shuffleAffirmations = (array) => {
    let m = array.length,
      t,
      i;
    while (m) {
      i = Math.floor(Math.random() * m--);
      t = array[m];
      array[m] = array[i];
      array[i] = t;
    }
    return array;
  };

  useEffect(() => {
    const getAffirmations = async () => {
      let response = await fetch(
        "https://dulce-affirmations-api.herokuapp.com/affirmation/index"
      );
      let tempAffirmations = await response.json();
      let shuffledAffirmations = shuffleAffirmations(tempAffirmations);
      setAffirmations(shuffledAffirmations);
    };
    getAffirmations();
  }, []);

  useEffect(() => {
    const interval = setInterval(() => {
      setIndex((prev) => (prev + 1) % colors.length);
      setCurrentAff((prev) => prev + 1);
    }, 5000);
    return () => clearInterval(interval);

    // eslint-disable-next-line
  }, [index]);

  return (
    <div className="App" style={{ backgroundColor: colors[index] }}>
      <div className="affirmation">
        <div key={uuidv4()} className="affirmation-text">
          {affirmations[currentAff].phrase}
        </div>
      </div>
      <iframe
        title="Soundcloud Player"
        width="25%"
        height="20%"
        scrolling="no"
        frameBorder="no"
        allow="autoplay"
        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/805331569&color=%23ff5500&auto_play=true&hide_related=false&show_comments=false&show_user=true&show_reposts=false&show_teaser=false&visual=false"
      ></iframe>
    </div>
  );
}

export default App;
