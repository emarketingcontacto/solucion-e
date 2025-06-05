import React from 'react'; 
import '../../App.css'; 
import './Home.css'; 
import About from './about'; 
import Projects from '../projects/projects'; 
import StickyWhatsApp from '../stickyWhatsApp'; 
import BtnContact from '../BtnContact';

const Home = () => {
	return (
	<div className='main-container'>
		<div className="home-hero">
			<div className="herodev-header-text">
				<h1>Desarrollo Web y Marketing Digital León, Guanajuato</h1>	
			</div>
		</div>

		<About></About>
		
		<div className="services-container">

			<div className="section-subtitle">
				<h2>Nuestros Servicios</h2>
			</div>
			<div className="section-single">
				<div className="section-single-service">
					<div className="section-service-number">
						<p>01</p>
						<h2>Desarrollo Web</h2>
					</div>
					<div className="section-service-image">
						<div className="image_desarrollo_web">
							<div className="yellow-color-rounded"></div>
						</div>
					</div>
					<div className="section-service-text">
						<p>¡Da el Salto Digital con Nosotros!
							No esperes más para tener la presencia online que tu negocio en León Guanajuato merece.
							Contáctanos hoy mismo para una consulta gratuita y descubre cómo podemos ayudarte a alcanzar tus metas en el mundo digital.
							¡Estamos listos para ser tu socio estratégico en el desarrollo web!
						</p>
						<a href="/desarrollo-web" className="btn-index">Mas Información...</a>
					</div>
				</div>

				<div className="section-single-service">
					<div className="section-service-number">
						<p>02</p>
						<h2>SEO / Local SEO</h2>
					</div>
					<div className="section-service-image">
						<div className="image-index-seo">
							<div className="yellow-color-rounded"></div>
						</div>
					</div>
					<div className="section-service-text">
						<p>
							Somos un equipo de especialistas en marketing digital y SEO con experiencia comprobada en el mercado de León, Guanajuato.
							Entendemos los desafíos de los pequeños y medianos empresarios y sabemos cómo aplicar estrategias de posicionamiento web que generen resultados reales. Enfoque Local: Conocemos las particularidades del mercado leonés y adaptamos nuestras estrategias para atraer a tus clientes más cercanos. Comunicación Clara: Te explicamos todo sin jerga técnica, para que siempre sepas qué estamos haciendo y por qué. Resultados Medibles: Te mostramos el progreso de tu posicionamiento con informes claros y comprensibles. No dejes que tu competencia te gane terreno en internet.
							Es hora de que tu negocio en León brille en Google!.
						</p>
						<a href="/seo" className="btn-index">Mas Información...</a>
					</div>
				</div>

				<div className="section-single-service">
					<div className="section-service-number">
						<p>03</p>
						<h2>Marketing Digital</h2>
					</div>
					<div className="section-service-image">
						<div className="image-index-mkt">
							<div className="yellow-color-rounded"></div>
						</div>
					</div>
					<div className="section-service-text">
						<p>
							No dejes pasar la oportunidad de que tus clientes te encuentren hoy mismo
							Los anuncios publicitarios por Internet son la vía más rápida para impulsar tu negocio en León.
							¡Listo para Impulsar tu Negocio con Publicidad Digital?
							¿Quieres que tus productos o servicios aparezcan en los primeros lugares de Google y en las redes sociales,
							atrayendo a clientes listos para comprar? Contáctame hoy mismo para una consulta gratuita y descubramos cómo
							las campañas de **Marketing SEM** pueden transformar el crecimiento de tu empresa en León, Guanajuato.
						</p>
						<a href="/marketing-digital" className="btn-index">Mas Información...</a>
					</div>
				</div>

				<div className="section-single-service">
					<div className="section-service-number">
						<p>04</p>
						<h2>Software a Medida</h2>
					</div>
					<div className="section-service-image">
						<div className="image-index-software">
							<div className="yellow-color-rounded"></div>
						</div>
					</div>
					<div className="section-service-text">
						<p>
							Invierte en una solución de programación a medida en León Guanajuato que te brinde el control, la eficiencia
							y la ventaja competitiva que necesitas.
							Contáctanos hoy mismo para una consulta gratuita. Juntos, definiremos la solución de software perfecta que
							impulsará tu negocio hacia el éxito.
						</p>
						<a href="/ingenieria-de-software" className="btn-index">Mas Información...</a>
					</div>
				</div>
			</div>	

		</div>
		<Projects></Projects>
		<BtnContact></BtnContact>
		<StickyWhatsApp></StickyWhatsApp>
			
	</div>
  )
}

export default Home