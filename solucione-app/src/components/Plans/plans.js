import React from 'react'; 
import './plans.css'; 
import StickyWhatsApp from '../stickyWhatsApp'; 


const plans = () => {
  return (
	  <div className="plans-container">
		  <div className="hero-plans">
			  <div className="herodev-header-text">
				<h1>Planes</h1>
			  </div>
		</div>
		  
		  <div className="section-subtitle">
			  <h2>
					Obtenga un presupuesto transparente adaptado a sus necesidades específicas.
			  </h2>
			
		</div>

		  <div className="prices">
			<div className="price-item">
				<h3>Desarrollo Web</h3> 
					<span className='money'>$7,500</span>
				  <h4 className='text-center'>
			  		Sitios web que convierten: atraiga, interactúe e impulse resultados con una poderosa presencia en línea
				  </h4>
				  <p>
					Ideal para: Startups y pequeñas empresas con una visión clara.
				  </p>
				  <div>
					  <p className='text-center'>
				  		Incluye: 
					  </p>
					  <ul>
						  <li>Diseño y desarrollo de sitios web personalizados</li>
						  <li>Optimización para dispositivos móviles</li>
						  <li>Configuración básica de SEO</li>
						  <li>Integración de formularios de contacto </li>
						  <li>Optimización de contenido en la página para una página de destino clave</li>
						  <li>Hosting Sin Limite</li>
						  <li>Domain</li>
					  </ul>
				  </div>
				  <a className='btn-index' href="/contacto">Más Información...</a>

			  </div>
			  <div className="price-item">
			  	<h3>SEM & Campañas en Redes Sociales </h3> 
				  <span className='money'>$2,000</span>
				  <h4 className='text-center'>Llegue al público adecuado y obtenga resultados más rápido </h4>
				  <div className="text-center">
					  Libérese de las limitaciones orgánicas con nuestra experiencia combinada en SEM (marketing en motores de búsqueda) y
					  publicidad en redes sociales. 
				  </div>
				  
				  <div>
					  <p className="text-center">Incluye: </p>
					  <ul>
						  <li>Investigación y optimización de palabras clave</li>
						  <li>Segmentación de audiencias en redes sociales</li>
						  <li>Creación de textos publicitarios y pruebas A/B</li>
						  <li>Optimización de la página de destino</li>
						  <li>Gestión básica de campañas</li>
						  <li className='liSmall'>
							  (Costo sólo por manejo de campaña)
						  </li>
					  </ul>
				  </div>
				    <a className='btn-index' href="/contacto">Más Información...</a>
			  </div>
			  <div className="price-item">
			  <h3 className='text-center'>Local SEO</h3> 
				  <span className='money'>$3,500</span>
				  <h4 className='text-center'>
					  Sea encontrado en línea, crezca localmente: nuestros servicios de SEO local brindan resultados.
					 
				  </h4>
				  <div className="text-center">
						Nuestros servicios expertos de SEO local optimizarán su presencia en línea para garantizar que los clientes que buscan empresas en su área lo descubran.
				  </div>
					  <div className='text-center'>
					  Ideal para: Empresas nuevas y aquellas con mínima presencia online.
				  </div>
				  <span style={{marginTop:"-1vh"}}>
					  Incluye:
					  <ul>
						  <li>Optimización del perfil de Google My Business</li>
						  <li>Página Web</li>
						  <li>Creación de citas locales en directorios relevantes</li>
						  <li>SEO en la página para orientación geográfica</li>
						  <li>Informe mensual para el análisis de los resultados</li>
					  </ul>
				  </span>
				   <a className='btn-index' href="/contacto">Más Información...</a>
			  </div>
		  </div>

		  <StickyWhatsApp></StickyWhatsApp>
	</div>
  )
}

export default plans