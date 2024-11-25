import React, { useState } from "react";
import logo from "../../assets/img/Logo.png";
import { Toastify } from "../../toastify/Toastify";
import { Link, NavLink } from "react-router-dom";
import { path } from '../../ultils/constant';
import { useNavigate } from "react-router-dom"
import { apiLogin } from "../../services/authService";


const Login = () => {
    const navigate = useNavigate()
    const [email, setEmail] = useState("");
    const [password, setPassword] = useState("");
    const handleLogin = async (e) => {
        e.preventDefault();

        try {
            const data = await apiLogin(email, password);
            console.log("Login successful:", data);

            // Lưu token vào localStorage
            localStorage.setItem("access_token", data.access_token);
            localStorage.setItem("refresh_token", data.refresh_token);


            Toastify.success("Login successful!");
            navigate('/*')
        } catch (err) {
            console.error("Login failed:", err);

            Toastify.error(err.message || "Login failed! Please try again.");
        }
    };

    return (
        <div className="font-[sans-serif] bg-white items-center justify-center md:h-screen p-6">
            <Link to={path.HOME}>
                <img src={logo} alt="logo" className="w-48 md:mb-4 mb-12" />
            </Link>
            <div className="flex items-center justify-center p-4">
                <div className="max-w-6xl max-md:max-w-lg rounded-md p-6">
                    <div className="grid md:grid-cols-2 items-center gap-10">
                        <div className="max-md:order-1 lg:min-w-[450px]">
                            <img
                                src="https://images-platform.99static.com//29ddf8HGpaJHUdQxqCQ7C2U8g_c=/74x0:709x635/fit-in/500x500/projects-files/50/5030/503000/85191cb9-0d89-4dd0-9e1d-e6415218edbb.png"
                                className="lg:w-11/12 w-full object-cover"
                                alt="login-image"
                            />
                        </div>

                        <form className="md:max-w-md w-full mx-auto" onSubmit={handleLogin}>

                            <div className="mb-12">
                                <h3 className="text-4xl font-extrabold text-[#005A8C]">
                                    Sign in
                                </h3>
                            </div>

                            <div>
                                <div className="relative flex items-center">
                                    <input
                                        name="email"
                                        type="text"
                                        value={email}
                                        onChange={(e) => setEmail(e.target.value)}
                                        required
                                        className="w-full text-sm border-b border-gray-300 focus:border-[#F5A623] px-2 py-3 outline-none"
                                        placeholder="Enter email"
                                    />
                                </div>
                            </div>

                            <div className="mt-8">
                                <div className="relative flex items-center">
                                    <input
                                        name="password"
                                        type="password"
                                        value={password}
                                        onChange={(e) => setPassword(e.target.value)}
                                        required
                                        className="w-full text-sm border-b border-gray-300 focus:border-[#F5A623] px-2 py-3 outline-none"
                                        placeholder="Enter password"
                                    />
                                </div>
                            </div>

                            <div className="flex flex-wrap items-center justify-between gap-4 mt-6">
                                <div className="flex items-center">
                                    <input
                                        id="remember-me"
                                        name="remember-me"
                                        type="checkbox"
                                        className="h-4 w-4 shrink-0 text-[#F5A623] focus:ring-[#FB8C00] border-gray-300 rounded"
                                    />
                                    <label
                                        htmlFor="remember-me"
                                        className="text-gray-800 ml-3 block text-sm"
                                    >
                                        Remember me
                                    </label>
                                </div>
                                <div>
                                    <a
                                        href="javascript:void(0);"
                                        className="text-[#FFA726] font-semibold text-sm hover:underline"
                                    >
                                        Forgot Password?
                                    </a>
                                </div>
                            </div>

                            <div className="mt-12">
                                <button
                                    type="submit"
                                    className="w-full shadow-xl py-2.5 px-5 text-sm font-semibold rounded-md text-white bg-[#FFA726] hover:bg-[#FB8C00] focus:outline-none"
                                >
                                    Sign in
                                </button>
                                <p className="text-[#005A8C] text-sm text-center mt-6">
                                    Don't have an account{" "}
                                    <NavLink
                                        to={path.REGISTER}
                                        className="text-blue-[#F5A623] font-semibold hover:underline ml-1 whitespace-nowrap"
                                    >
                                        Register here
                                    </NavLink>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default Login;
