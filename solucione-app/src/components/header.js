import React from 'react'; 
import "./header.css"; 
import { NavLink } from 'react-router-dom';

const header = () => {
  return (
	 
	<nav className="navbar navbar-expand-lg bg-body-tertiary">
	<div className="container-fluid">
	  <a className="navbar-brand" href="/">Solucion-<span className="font-red">e</span></a>
	  <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		<span className="navbar-toggler-icon"></span>
	  </button>
	  <div className="collapse navbar-collapse" id="navbarNavDropdown">
		<ul className="navbar-nav">
			<li className="nav-item">
				<NavLink className="nav-link active" to="/">Home</NavLink>
			</li>
			<li>
				<NavLink className="nav-link" to="/desarrollo-web-leon-guanajuato">Desarrollo Web</NavLink>
     		</li>		  
			<li>
				<NavLink className="nav-link" to="/anuncios-publicitarios-leon-guanajuato">Anuncios Publicitarios</NavLink>
			</li>
			<li>
				<NavLink className="nav-link" to="/posicionamiento-web-leon-guanajuato">Posicionamiento Web</NavLink>
			</li>	
			<li>
				<NavLink className="nav-link" to="/desarrollo-de-software-leon-guanajuato">Desarrollo de Software</NavLink>
			</li>
					  
			<li className="nav-item">
				<NavLink className="nav-link" to="/planes">Planes</NavLink>
			</li>
			<li className="nav-item">
				<NavLink className="nav-link" to="/contacto">Contacto</NavLink>
		  	</li>
		</ul>
	  </div>
	</div>
  </nav>
	  
  )
}

export default header