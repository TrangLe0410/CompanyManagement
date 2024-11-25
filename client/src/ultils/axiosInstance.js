import axios from 'axios';

const axiosInstance = axios.create({
    baseURL: process.env.REACT_APP_API_URL || 'http://127.0.0.1:8000',
    'Content-Type': 'application/json',

});

// Interceptor trước khi gửi request
axiosInstance.interceptors.request.use(
    (config) => {
        const token = localStorage.getItem('token');
        if (token) {
            config.headers.Authorization = `Bearer ${token}`; // Thêm token vào header
        }
        return config;
    },
    (error) => Promise.reject(error)
);

// Interceptor sau khi nhận response
axiosInstance.interceptors.response.use(
    (response) => response?.data, // Lấy dữ liệu chính
    async (error) => {
        if (error.response?.status === 401) {
            const originalRequest = error.config;

            try {
                // Lấy refresh_token từ localStorage
                const refreshToken = localStorage.getItem('refresh_token');

                if (refreshToken) {
                    // Gửi yêu cầu làm mới token
                    const { access_token } = await axiosInstance.post('/api/auth/refresh', { refresh_token: refreshToken });

                    // Lưu token mới
                    localStorage.setItem('token', access_token);

                    // Thêm token mới vào header và gửi lại yêu cầu ban đầu
                    originalRequest.headers.Authorization = `Bearer ${access_token}`;
                    return axiosInstance(originalRequest);
                }
            } catch (refreshError) {
                // Xử lý nếu refresh token cũng không hợp lệ
                localStorage.removeItem('token');
                localStorage.removeItem('refresh_token');
            }
        }

        return Promise.reject(error);
    }
);

export default axiosInstance;
