import "../css/cards.css"

export default function FlightCard({src_img, partida, destino, fecha, hora_partida, hora_llegada, cupos}) {
  return (
    <div>
        <img src={src_img}/>
        <p>Fecha: {fecha}</p>
        <p>Cupos: {cupos}</p>
        <p>Ciudad de destino: {destino}</p>
        <p>Ciudad de partida: {partida}</p>
        <p>Hora de partida: {hora_partida}</p>
        <p>Hora de llegada: {hora_llegada}</p>
    </div>
  )
}
