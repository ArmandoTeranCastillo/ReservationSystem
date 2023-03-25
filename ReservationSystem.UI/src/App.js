import "./App.css";
import { homeComponent } from "./home/containers/homeComponent";
import { BrowserRouter, Route, Routes, Navigate } from "react-router-dom";
import { notFoundComponent } from "./home/components/not-found/notFoundComponent";

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/" element={<Navigate to="/home" replace />} />
        <Route path="/home" element={homeComponent()} />
        <Route path="*" element={notFoundComponent()} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;
