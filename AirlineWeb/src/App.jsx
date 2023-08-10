import Header from "./components/Header";
import FlightCard from "./components/FlightCard";
import "./css/global.css";

function App() {
    return (
        <>
            <Header />
            <img src="../../public/icon.jpg" alt="" />
            <div className="grid-container">
                <FlightCard />
            </div>
        </>
    );
}

export default App;
