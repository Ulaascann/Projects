import { Route, Routes } from 'react-router-dom';
import Anasayfa from './Anasayfa';
import './App.css';
import Navbar from './components/Navbar';
import AdminPage from './pages/AdminPage';
import CartPage from './pages/CartPage';
import EditMenu from './pages/EditMenu';
import HomePage from './pages/HomePage';
import LoginPage from './pages/LoginPage';
import OrderPage from './pages/OrderPage';
import RegisterPage from './pages/RegisterPage';

function App() {
  return (
    <div className="App">
      <Navbar />
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/sepet" element={<CartPage />} />
        <Route path="/kaydol" element={<RegisterPage />} />
        <Route path="/giris" element={<LoginPage />} />
        <Route path="/orders" element={<OrderPage />} />
        <Route path="/admin/*" element={<AdminPage />} />
      </Routes>
    </div>
  );
}

export default App;
