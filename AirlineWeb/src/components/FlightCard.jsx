import "../css/cards.css";
import { useState, useEffect } from "react";

export default function FlightCard() {
    const [flights, setFlights] = useState([]);

    useEffect(() => {
        fetch("http://127.0.0.1:8000/vuelos" ,{
            method: 'GET',
            mode: "cors",
            credentials: "include"
            })
            .then((response) => response.json())
            .then((data) => setFlights(data))
            .catch((error) => console.error("Error fecth " , error));
    }, []);

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
                </div>
            ))}
        </>
    );
}
