import Header from "./components/Header";
import FlightCard from "./components/FlightCard";
import "./css/global.css";

function App() {
    return (
        <>
            <Header />
            <div className="grid-container">
                <FlightCard
                    src_img={
                        "https://i.ytimg.com/vi/z7F0g6JbYgM/maxresdefault.jpg"
                    }
                    cupos={50}
                    fecha={"15/08/2023"}
                    partida={"Cartagena"}
                    destino={"Bogota"}
                    hora_partida={"3:00PM"}
                    hora_llegada={"500 PM"}
                />
            </div>
        </>
    );
}

export default App;
