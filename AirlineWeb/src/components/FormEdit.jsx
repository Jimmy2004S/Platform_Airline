import { useState } from "react"

export const FormEdit = ({onClose, flightData}) => {
    const [formData, setFormData] = useState(flightData);
    const handleInputChange = (e) =>{
        const { name, value } = e.target;
        setFormData((prevData) => ({ ...prevData, [name]: value }));
    }

    const handleEditFlight = (e) => {
        e.preventDefault();
    
        fetch(`http://127.0.0.1:8000/api/vuelos/${flightData.id}`, {
          method: "PUT",
          mode: "cors",
          credentials: "include",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify(formData),
        })
          .then((response) => response.json())
          .then((data) => {
            onUpdate(data);
          })
          .catch((error) => {
            console.error("El error es: ", error);
          });
      };
  return (
    <form onSubmit={handleEditFlight}>
       <button type="button" onClick={onClose} className="btn-close">
        X
      </button>
      <label>Fecha</label>
      <input
        type="date"
        name="fecha"
        id=""
        value={formData.fecha || ""}
        onChange={handleInputChange}
      />
      <label htmlFor="cupos_disponibles">Cupos Disponibles</label>
      <input
        type="number"
        name="cupos_disponibles"
        id="cupos_disponibles"
        value={formData.cupos_disponibles}
        onChange={handleInputChange}
      />
      <label htmlFor="cupos">Cupos</label>
      <input
        type="number"
        name="capacidad_pasajeros"
        id="cupos"
        value={formData.capacidad_pasajeros}
        onChange={handleInputChange}
      />
      <label htmlFor="ciudad_destino">Ciudad de destino</label>
      <input
        type="text"
        name="ciudad_destino"
        id="ciudad_destino"
        value={formData.ciudad_destino}
        onChange={handleInputChange}
      />
      <label htmlFor="ciudad_partida">Ciudad de partida</label>
      <input
        type="text"
        name="ciudad_partida"
        id="ciudad_partida"
        value={formData.ciudad_partida}
        onChange={handleInputChange}
      />
      <input type="submit" value="Editar" className="btn-add"/>
    </form>
  )
}
