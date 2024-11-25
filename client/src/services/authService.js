import axiosInstance from "../ultils/axiosInstance";

export const apiLogin = (email, password) => {
    return new Promise(async (resolve, reject) => {
        try {
            const response = await axiosInstance({
                method: 'post',
                url: '/api/auth/login',
                data: { email, password },
            });
            resolve(response);
        } catch (error) {
            if (error.response && error.response.data) {
                reject(new Error(error.response.data.message || "An error occurred."));
            } else {
                reject(new Error("Unable to connect to the server."));
            }
        }
    });
};

export const apiRegister = (username, email, password) => {
    return new Promise(async (resolve, reject) => {
        try {
            const response = await axiosInstance({
                method: 'post',
                url: '/api/auth/register',
                data: { username, email, password },
            });
            resolve(response);
        } catch (error) {
            if (error.response && error.response.data) {
                reject(new Error(error.response.data.message || "An error occurred."));
            } else {
                reject(new Error("Unable to connect to the server."));
            }
        }
    });
};
