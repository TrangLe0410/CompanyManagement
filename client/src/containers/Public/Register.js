import React, { useState } from "react";
import logo from "../../assets/img/Logo.png"
import { Link, NavLink } from "react-router-dom";
import { path } from '../../ultils/constant';
import { apiRegister } from "../../services/authService";
import { Toastify } from "../../toastify/Toastify";
const Register = () => {

    const [email, setEmail] = useState("")
    const [username, setUsername] = useState("")
    const [password, setPassword] = useState("")
    const handleRegister = async (e) => {
        e.preventDefault();

        try {
            const data = await apiRegister(username, email, password);
            console.log("Register successful", data);

            Toastify.success("Register successful");
            setUsername("");
            setEmail("");
            setPassword("");
        } catch (err) {
            console.error("Register failed:", err);
            Toastify.error(err.message || "Register failed! Please try again.");
        }
    }


    return (
        <div class="font-[sans-serif] bg-white items-center justify-center md:h-screen p-6">
            <Link to={path.HOME}>
                <img src={logo} alt="logo" className="w-48 md:mb-4 mb-12" />
            </Link>
            <div class=" flex items-center justify-center p-4">

                <div class=" max-w-6xl max-md:max-w-lg rounded-md p-6">
                    <div class="grid md:grid-cols-2 items-center gap-10">
                        <div class="max-md:order-1 lg:min-w-[450px]">
                            <img src="https://images-platform.99static.com//29ddf8HGpaJHUdQxqCQ7C2U8g_c=/74x0:709x635/fit-in/500x500/projects-files/50/5030/503000/85191cb9-0d89-4dd0-9e1d-e6415218edbb.png"
                                class="lg:w-11/12 w-full object-cover" alt="login-image" />
                        </div>

                        <form class="md:max-w-md w-full mx-auto" onSubmit={handleRegister}>
                            <div class="mb-12">
                                <h3 class="text-4xl font-extrabold text-[#005A8C]">Create an account</h3>
                            </div>

                            <div>
                                <label class="text-gray-800 text-xs block mb-2">UserName</label>
                                <div class="relative flex items-center">
                                    <input
                                        name="name"
                                        type="text"
                                        value={username}
                                        onChange={(e) => setUsername(e.target.value)}
                                        required
                                        class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none"
                                        placeholder="Enter name" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                                        <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                        <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="text-gray-800 text-xs block mb-2">Email</label>
                                <div class="relative flex items-center">
                                    <input
                                        name="email"
                                        type="text"
                                        value={email}
                                        onChange={(e) => setEmail(e.target.value)}
                                        required
                                        class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none"
                                        placeholder="Enter email" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 682.667 682.667">
                                        <defs>
                                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                                <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                            </clipPath>
                                        </defs>
                                        <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                            <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" data-original="#000000"></path>
                                            <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" data-original="#000000"></path>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-6">
                                <label class="text-gray-800 text-xs block mb-2">Password</label>
                                <div class="relative flex items-center">
                                    <input
                                        name="password"
                                        type="password"
                                        value={password}
                                        onChange={(e) => setPassword(e.target.value)}
                                        required
                                        class="w-full bg-transparent text-sm border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none"
                                        placeholder="Enter password" />
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                                        <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="mt-12">
                                <button type="submit"
                                    class="w-full py-3 px-6 text-sm tracking-wider font-semibold rounded-md bg-[#FFA726] hover:bg-[#FB8C00] text-white focus:outline-none">
                                    Creat an account
                                </button>
                                <p className="text-[#005A8C] text-sm text-center mt-6">Already have an account? <NavLink to={path.LOGIN} className="text-blue-[#F5A623] font-semibold hover:underline ml-1 whitespace-nowrap">Login here</NavLink></p>
                            </div>


                        </form>
                    </div>
                </div>
            </div>

        </div>

    );
}
export default Register;