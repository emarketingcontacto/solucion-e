import './App.css';
import 'bootstrap/dist/css/bootstrap.min.css';
import Home from './components/Home/Home'; 
import Header from './components/header';
import { Route, Routes } from 'react-router-dom';
import Marketing from './components/Marketing/Marketing';
import WebDevelopment from './components/WebDevelopment/WebDevelopment'; 
import SEO from './components/SEO/Seo'; 
import Plans from './components/Plans/plans';
import Contacto from './components/Contacto/Contacto';
import Engineering from './components/Engineering/Engineering';
import Footer from './components/footer'; 


function App() {
  return (
    <div className="App">
      <Header></Header>
      <main className="app_main">
        <Routes>
          <Route path="/" element={<Home></Home>}></Route>
          <Route path='/desarrollo-web-leon-guanajuato' element={<WebDevelopment></WebDevelopment>}></Route>
          <Route path='/anuncios-publicitarios-leon-guanajuato' element={<Marketing></Marketing>}></Route>
          <Route path='/posicionamiento-web-leon-guanajuato' element={<SEO></SEO>}></Route>
          <Route path='/desarrollo-de-software-leon-guanajuato' element={<Engineering></Engineering>}></Route>
          <Route path='/planes' element={<Plans></Plans>}></Route>
          <Route path='/contacto' element={<Contacto></Contacto>}></Route>
        </Routes>
      </main>
      <Footer></Footer>
    </div>
  );
}

export default App;
