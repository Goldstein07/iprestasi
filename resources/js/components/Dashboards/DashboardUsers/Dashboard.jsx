import React from "react";
import Navbar from "../../Navbar";
import HeaderSection from "./HeaderSection";
import SearchBox from "./SearchBox";
import ProcedureCards from "./ProcedureCards";
import CardLomba from "./CardLomba";
import CardBeasiswa from "./CardBeasiswa";
import CardAbdimas from "./CardAbdimas";
import CardPenelitian from "./CardPenelitian";
import Footer from "../../Footer";

const Dashboard = () => {
    return (
        <div>
            <Navbar />
            <HeaderSection />
            <SearchBox />
            <ProcedureCards />
            <CardLomba />
            <CardBeasiswa />
            <CardAbdimas />
            <CardPenelitian />
            <Footer />
        </div>
    );
};

export default Dashboard;
