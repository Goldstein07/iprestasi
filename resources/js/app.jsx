// resources/js/App.jsx
import React from "react";
import ReactDOM from "react-dom/client";
import LoginUsers from "./components/LoginPages/LoginUsers/LoginUsers";
import Dashboard from "./components/Dashboards/DashboardUsers/Dashboard";

const rootElement = document.getElementById("App");

if (rootElement) {
    ReactDOM.createRoot(rootElement).render(
        <React.StrictMode>
            {/* <LoginUsers /> */}
            <Dashboard />
        </React.StrictMode>
    );
}
