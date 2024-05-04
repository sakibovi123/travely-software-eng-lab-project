import { useState } from "react";
import reactLogo from "./assets/react.svg";
import viteLogo from "/vite.svg";
import "./App.css";
import {
    BrowserRouter as Router,
    Routes,
    Route,
    Navigate,
    useNavigate,
} from "react-router-dom";

import Home from "./Pages/Home";

function App() {
    const [count, setCount] = useState(0);

    return (
        <>
            <Routes>
                {/* <Route exact path="" element={<Home />} /> */}
                <Route exact path="/" element={<Home />}></Route>
            </Routes>
        </>
    );
}

export default App;
