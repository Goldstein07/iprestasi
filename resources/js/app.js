import React from 'react';
import ReactDOM from 'react-dom/client';
import LoginPage from './components/LoginPage';

// Menggunakan React 18
const rootElement = document.getElementById('login-page');

if (rootElement) {
    const root = ReactDOM.createRoot(rootElement);
    root.render(<LoginPage />);
}
