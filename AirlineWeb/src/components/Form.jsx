import "../css/formulario.css";
import { useState } from "react";

export const FormAddFlight = ({ onClose }) => {
  const [flightData, setFlightData] = useState({
    fecha: "",
    capacidad_pasajeros: "",
    cupos_disponibles: "",
    ciudad_destino: "",
    ciudad_partida: "",
    picture: "",
  });

  const handleInputChange = (event) => {
    const { name, value } = event.target;
    setFlightData((prevData) => ({ ...prevData, [name]: value }));
  };

  const handleAddFlight = (e) => {
    e.preventDefault();

    fetch("http://127.0.0.1:8000/api/vuelos", {
      method: "POST",
      mode: "cors",
      credentials: "include",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify(flightData),
    })
      .then((response) => response.json())
      .then((data) => {
        console.log("vuelo agregado: ", data);
      })
      .catch((error) => {
        console.error("El error es: ", error);
      });

      onClose();
  };

  return (
    <form onSubmit={handleAddFlight}>
      <button type="button" onClick={onClose} className="btn-close">
        X
      </button>
      <label>Fecha</label>
      <input
        type="date"
        name="fecha"
        id=""
        value={flightData.fecha}
        onChange={handleInputChange}
      />
      <label htmlFor="cupos_disponibles">Cupos Disponibles</label>
      <input
        type="number"
        name="cupos_disponibles"
        id="cupos_disponibles"
        value={flightData.cupos_disponibles}
        onChange={handleInputChange}
      />
      <label htmlFor="cupos">Cupos</label>
      <input
        type="number"
        name="capacidad_pasajeros"
        id="cupos"
        value={flightData.capacidad_pasajeros}
        onChange={handleInputChange}
      />
      <label htmlFor="ciudad_destino">Ciudad de destino</label>
      <input
        type="text"
        name="ciudad_destino"
        id="ciudad_destino"
        value={flightData.ciudad_destino}
        onChange={handleInputChange}
      />
      <label htmlFor="ciudad_partida">Ciudad de partida</label>
      <input
        type="text"
        name="ciudad_partida"
        id="ciudad_partida"
        value={flightData.ciudad_partida}
        onChange={handleInputChange}
      />
      <label htmlFor="picture">Picture</label>
      <input type="file" name="picture" id="picture" value={flightData.picture} onChange={handleInputChange}/>
      <input type="submit" value="Agregar" className="btn-add"/>
    </form>
  );
};

