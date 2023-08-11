import Header from "./components/Header";
import FlightCard from "./components/FlightCard";
import "./css/global.css";
import { useState } from "react";
import { FormAddFlight } from "./components/Form";

function App() {
  const [showForm, setshowForm] = useState(false);

  const openForm = () => {
    setshowForm(true);
  };

  const closeForm = () => {
    setshowForm(false);
  };
  return (
    <>
      <Header />
      <button className="btn-add" onClick={openForm}>
        Add Flight
      </button>
      <div className="grid-container">
        <FlightCard />
      </div>
      {showForm && (
        <div>
          <div className="overlay" onClick={closeForm}></div>
          <FormAddFlight onClose={closeForm} />
        </div>
      )}
    </>
  );
}

export default App;
