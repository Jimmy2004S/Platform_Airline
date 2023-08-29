import "../css/cards.css";
import "../css/formulario.css"
import { useState, useEffect } from "react";
import { FormEdit } from "./FormEdit";

export default function FlightCard() {
  const [flights, setFlights] = useState([]);
  const [showForm, setShowForm] = useState(false);
  const [editingFlightId, setEditingFlightId] = useState(null); 

  const openForm = () => {
    setShowForm(true);
  };

  const closeForm = () => {
    setShowForm(false);
  };

  useEffect(() => {
    fetchFlights();
  }, []);

  const fetchFlights = () => {
    fetch("http://127.0.0.1:8000/api/vuelos", {
      method: "GET",
      mode: "cors",
      credentials: "include",
    })
      .then((response) => response.json())
      .then((data) => setFlights(data))
      .catch((error) => console.error("Error fecth ", error));
  };

  const handleDelete = (flightId) => {
    fetch(`http://127.0.0.1:8000/api/vuelos/${flightId}`, {
      method: "DELETE",
      mode: "cors",
      credentials: "include",
    })
      .then((response) => {
        if (response.ok) {
          fetchFlights();
        }
      })
      .catch((error) => console.error("Error al eliminar usuario: ", error));
  };

  const handleEdit = (id) => {
    setEditingFlightId(id);
    openForm();
  };

  return (
    <>
      {flights.map((flight) => (
        <div key={flight.id}>
          <img src={flight.picture} />
          <p>Fecha: {flight.fecha}</p>
          <p>Cupos: {flight.capacidad_pasajeros}</p>
          <p>Cupos disponibles: {flight.cupos_disponibles}</p>
          <p>Ciudad de destino: {flight.ciudad_destino}</p>
          <p>Ciudad de partida: {flight.ciudad_partida}</p>
          <button
            className="btn-delete"
            onClick={() => handleDelete(flight.id)}
          >
            Delete
          </button>
          <button
            className="btn-edit"
            onClick={() => handleEdit(flight.id)}
          >
            Edit
          </button>
        </div>
      ))}

      {showForm && editingFlightId !== null && (
        <div>
          <div className="overlay" onClick={closeForm}></div>
          <FormEdit
            onClose={() => {
              closeForm();
              setEditingFlightId(null); 
            }} 
            flightData={flights.find((flight) => flight.id === editingFlightId)}
          />
        </div>
      )}
    </>
  );
}
