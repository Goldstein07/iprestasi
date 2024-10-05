import React from "react";
import LeftImage from "./LeftImage";
import LoginForm from "./LoginForm";

const LoginUsers = () => {
    return (
        <div className="w-full h-screen flex bg-white relative">
            <LeftImage />
            <LoginForm />
        </div>
    );
};

export default LoginUsers;
