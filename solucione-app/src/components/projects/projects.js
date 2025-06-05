import React from 'react'; 
import 'bootstrap/dist/css/bootstrap.min.css'; 

import './projects.css'; 
import zapatos from '../images/projects/zapatosguanajuato.webp'; 
import botero from '../images/projects/botero.webp'; 
import asipe from '../images/projects/asipe.webp'; 
import veterinario from '../images/projects/centroatencionveterinaria.webp'; 
import livinghouse from '../images/projects/livinghouse.webp'; 

const Projects = () => {
  return (
	  <div className="projects">
		  {/* <div className="d-flex justify-content-center align-items-center">
			  <h2 className='projects-title'>Video Marketing</h2>
		  </div>
		  <hr /> */}

		  {/* <div className="projects-videos">
			
			<div className="project ratio ratio-21x9">
			  <iframe src="https://www.youtube.com/embed/rDFrDU15w5s?si=hYINb9ouqkJMsv69" title="YouTube video" allowFullScreen></iframe>
			</div>
			  
			<div className="project ratio ratio-21x9">
			  <iframe src="https://www.youtube.com/embed/CtP-0B5NuC4?si=DET8njoOik_9tXw-" title="YouTube video" allowFullScreen></iframe>
			</div>

			  
			<div className="project ratio ratio-21x9">
			  <iframe src="https://www.youtube.com/embed/lGZCSSBnTBA?si=q6y-FGVqzpDAlHwP" title="YouTube video" allowFullScreen></iframe>
			</div>
		
			<div className="project ratio ratio-21x9">
			  <iframe src="https://www.youtube.com/embed/0PG5YZItLnY?si=S2aSDoxW-aHc-u3b" title="YouTube video" allowFullScreen></iframe>
			</div>
			
		  </div> */}

		  <div className="section-subtitle">
				  <h2>Projectos Web</h2>
		  </div>
		  <div className="projects-container">
			
			<div className="project">
				  <a href="https://zapatosguanajuato.mx/">
					  <img src={ zapatos} alt="zapatosguanjuato.mx" width={'100%'} height={250}/>
				  </a>
		  	</div>
			<div className="project">
			  	<a href="https://pizzas-boteros-paseos-las-torres.netlify.app">
				  <img src={ botero} alt="" width={'100%'} height={250}/>
				</a>
			</div>
			<div className="project">
				  <a href="https://asipe.netlify.app/">
					  <img src={asipe} alt="" width={'100%'} height={250}/>
				</a>
			</div>
		  	<div className="project">
				<a href="https://centro-atencion-veterinaria-lastorres.netlify.app/">
					<img src={veterinario} alt="" width={'100%'} height={250}/>
					</a>
			</div>
			<div className="project">
				<a href="https://livinghouse.com.mx/">
					<img src={livinghouse} alt="" width={'100%'} height={250}/>
					</a>
			</div>

		  </div>
		  
	</div>
  )
}

export default Projects