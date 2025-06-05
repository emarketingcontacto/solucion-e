import React from 'react'
import '../../App.css'; 
import './WebDevelopment.css'; 
import Frameworks from './Frameworks'; 
import StickyWhatsApp from '../stickyWhatsApp'; 

function WebDevelopment() {
	return (
	  
		<div className="development-container">
		{/* hero */}
		<div className="herodev">
			<div className="herodev-header-text">
			<h1>Desarrollo de Páginas Web Profesionales en León, Guanajuato </h1>
			</div>   
		</div>
		{/* end hero */}
		
		{/* intro */}
		{/* intro-title */}
		<div className="section-subtitle">
			<h2>Tu Socio Experto en Desarrollo de Páginas Web a Medida</h2>
		</div>
			
		{/* end intro-title */}
		{/* intro-columns */}
		<div className="section-columns">
			<div className="section-column">
				<p>
					Vivimos en una era donde lo primero que hace un cliente potencial es buscar en Internet.
				</p>
				<p>
					Ya no basta con tener un local físico o ser conocido en la zona. Si tu negocio no aparece cuando alguien busca tus productos o servicios, simplemente no existes para una gran parte del mercado.
				</p>
				<p>
					Quizás ya tienes redes sociales, pero ¿tienes tu propio "hogar" digital? Un lugar que controlas al 100%, que refleja la seriedad y profesionalismo de tu marca y que trabaja para ti las 24 horas del día, los 7 días de la semana.
				</p>
				<p>
					En solucion-e, somos expertos en <strong>desarrollo de páginas web en León, Guanajuato</strong>, y entendemos las necesidades de los negocios locales y nacionales.
				</p>
				<p>
					Creamos sitios web que no solo se ven bien, sino que son herramientas de crecimiento para tu empresa, construidas con la solidez que garantizan resultados
					a largo plazo.
				</p>
			  </div>	  
			  <div className="section-column">
				  <div className="intro-image">
					  <div className="yellow-color"></div>
				  </div>
			  </div>	  
		</div>
		{/* intro-columns */}
		{/* intro */}
		  
		{/* important-web */}
		<div className="section-subtitle-gray">
			<h2>¿Porqué una Página Web es Indispensable para tu Negocio Moderno?</h2>
		</div>
		
		<div className="section-columns">
			<div className="section-column">
					<div className="indispensable-web">
						<div className="yellow-color"></div>
				</div>
			</div>
			<div className="section-column">
				<ul>
					<li>
						<strong>Tu Oficina Central en Internet:</strong> Es donde controlas tu mensaje, tu marca y la información que quieres que tus clientes encuentren. A diferencia de las redes sociales, aquí no hay distracciones ni algoritmos que limiten quién ve tu contenido.
					</li>
					<li>
						<strong>Credibilidad y Profesionalismo:</strong> Una página web bien diseñada transmite confianza y seriedad. Es como tener un local limpio y bien organizado; le dice a tus clientes que te tomas tu negocio en serio. Desde un taller de carpintería hasta una arrendadora de maquinaria pesada, una web eleva tu imagen.
					</li>
					<li>
						<strong>Abierto 24/7:</strong> Tu sitio web trabaja sin descanso. Los clientes pueden conocer tus productos/servicios, encontrar tu ubicación o contacto, y hasta realizar acciones (como pedir una cotización o reservar) en cualquier momento, incluso fuera de tu horario de oficina.
					</li>
					<li>
						<strong>Alcanza Nuevos Clientes</strong>: Internet no tiene fronteras. Una página web optimizada te permite ser encontrado no solo por personas en León, sino también en todo Guanajuato, México o donde sea relevante para tu negocio.
					</li>
					<li>
						<strong>Entiende a Tus Clientes:</strong> Con herramientas de análisis, puedes saber cuánta gente visita tu sitio, qué les interesa más y cómo llegaron a ti. ¡Información valiosa para tomar mejores decisiones!
					</li>
				</ul>
			</div>
		</div>
		{/* important-web */}  
		  
		{/* web type   */}
		<div className="section-subtitle">
			<h2>Descubre el Tipo de Web Ideal para Tu Negocio</h2>
		</div>
		
		<div className="section-subtitle-gray">
			<h3>Cada negocio es único, y por eso, la página web que necesitas también debe serlo</h3>
				<h4>Porque no todas las páginas son iguales.</h4>
				<h5>Podemos desarrollar el tipo de sitio web que mejor se adapte a tus objetivos:	</h5>
		</div>	
			
		<div className="section-columns-border">
				<div className='column-border'>
					<h5>Página de Aterrizaje (Landing Page):</h5>
				<p>
					Perfecta si quieres enfocarte en promocionar un servicio o producto específico, captar datos de clientes potenciales (leads) o dirigir a la gente a realizar una única acción clara (comprar, registrarse, contactar). Son concisas y muy efectivas para campañas de marketing digital.
				</p>
			</div>
				<div className='column-border'>
					<h5>Página Web Informativa / Institucional:</h5>
					<p>
						Es la "tarjeta de presentación" completa de tu negocio en línea. Ideal para mostrar quién eres, tu historia, describir a detalle tus productos/servicios, tener una sección de contacto, preguntas frecuentes, etc. Es fundamental para transmitir confianza y dar a conocer tu propuesta de valor.
					</p>
			</div>
				<div className='column-border'>
					<h5>Páginas Web con Sistema de Reservaciones/Citas:</h5>
					<p>
						Si tu negocio requiere que los clientes agenden un espacio o servicio (barberías, spas, consultorios médicos o veterinarios, talleres de servicio, etc.), este tipo de web facilita que tus clientes reserven online a cualquier hora, reduciendo llamadas y optimizando tu tiempo y el de tu personal.
					</p>
			</div>
			<div className='column-border'>
					<h5>Sitios Web con Membresías o Suscripciones:</h5>
					<p>
						Si ofreces contenido exclusivo, servicios premium, cursos online o acceso a una comunidad especial de forma recurrente (pago mensual, anual), este tipo de sitio te permite gestionar usuarios, pagos y el acceso a áreas restringidas. Ideal para consultores, coaches, plataformas de contenido, etc.
					</p>
			</div>
		</div>
		{/* end web type   */}
		
		{/* Web vs Redes */}
		<div className="section-subtitle">
			<h2>Tu Web vs Redes Sociales</h2>	  
		</div>
		<div className="section-subtitle-gray">
			<h3> ¿Cuál es la Diferencia y Porqué Necesitas Ambas?</h3>
		</div>

  		<div className="section-socials">
			<div className='inside-section-subtitle-graytransparent text-white'>
				<p>Es probable que ya uses Facebook, Instagram, TikTok o YouTube para tu negocio (¡y eso es muy bueno!).</p>
				<p>Las redes sociales son fantásticas para:</p>
					<ul>
						<li><strong>Generar comunidad y conversación:</strong> Interactuar directamente con tus clientes.</li>
						<li><strong>Difusión rápida:</strong> Compartir noticias, ofertas o contenido viral.</li>
						<li><strong>Publicidad segmentada:</strong> Llegar a públicos específicos.</li>
					</ul>
				<h5	className='text-yellow'>
					Pero, las redes sociales tienen limitaciones importantes que tu propia página web resuelve:
				</h5>
			</div>
			
			<div className='column-socials-networks'>
				<div className="social-networks-number">
					<p>1</p>
				</div>
				<div className="social-networks-text">
					<p>
						<span className="yellow-important-text">Control Total: </span>En redes, estás sujeto a sus reglas, cambios de algoritmo y políticas. Tu cuenta podría verse afectada sin previo aviso. Tu web es tuya, controlas el diseño, el contenido, la experiencia del usuario y los datos.
					</p>
				</div>
			</div>
				
			<div className='column-socials-networks'>
				<div className="social-networks-number">
					<p>2</p>
				</div>
				<div className="social-networks-text">
					<p>
					<span className="yellow-important-text">Profesionalismo y Autoridad: </span>Una web es el pilar de tu presencia online. Transmite mucha más seriedad y establece tu marca como una entidad sólida, no solo un perfil social.
					</p>						 
				</div>
			</div>
				
			<div className='column-socials-networks'>
				<div className="social-networks-number">
					<p>3</p>
				</div>
				<div className="social-networks-text">
					<p>
						<span className="yellow-important-text">Información Centralizada: </span> En tu web, el cliente encuentra todo lo que necesita de manera organizada: quién eres, qué haces, dónde estás, cómo contactarte, catálogo completo, testimonios, etc. En redes, la información está dispersa y limitada por el formato de la plataforma.
					</p>
				</div>
			</div>
				
			<div className='column-socials-networks'>
				<div className="social-networks-number">
					<p>4</p>
				</div>
				<div className="social-networks-text">
					<p>
						<span className="yellow-important-text">Optimización para Buscadores (Google):</span> Las redes sociales tienen visibilidad limitada en Google para búsquedas específicas de productos o servicios como "carpintero en León" o "renta de grúas Guanajuato". Tu página web puede optimizarse para que Google te encuentre fácilmente cuando alguien busca exactamente lo que ofreces.
					</p>
				</div>	
			</div>
				<div className="section-single section-black-stronger text-white">
					<h5 className='text-yellow'>La clave es la Sinergia:</h5>
					<p className='text-medium'>Tus redes sociales son el altavoz y el canal de interacción</p>
					<div className="text-medium">
						<ul className='none-li'>
							<p className='text-medium'>Tu página web es:  </p>
							<li className='text-yellow'>"Tu casa digital"</li>
							<li>Consolida tu marca</li>
							<li>Ofrece información completa</li>
							<li className='text-yellow'>Convierte visitantes en clientes.</li>
						</ul>
					</div>
					<h5 className='text-yellow'>Se complementan perfectamente.</h5>
			</div>

		</div>
		{/* End Web vs Redes */}
		
		{/* proceso */}
		<div className="section-subtitle">
			<h2>
				El Camino Hacia una Página Web de Alto Rendimiento en León
			</h2>	
		</div>
		<div className="section-subtitle-gray">
				<h3 style={{ paddingLeft: '3vw',paddingRight:'3vw'}}>
				Nuestro proceso de desarrollo web está meticulosamente diseñado para entregarte una página web que no solo sea visualmente atractiva, sino que también funcione a la perfección y te impulse hacia tus objetivos:
			</h3>
		</div>
		<div className="process-image">
			<div className="section-columns" style={{alignItems:'start'}}>
			<div className="section-column">
				<div className="dev-steps">
					<div className="dev-number">
						<p>1</p>
					</div>
					<div className="dev-step">
						<p>
						<span className="yellow-important-text">Análisis de Palabras Clave:</span> Investigamos a fondo los términos que tus clientes potenciales utilizan para buscar tus servicios en León Guanajuato (ejemplo: "carpinteros en León", "renta de maquinaria pesada Guanajuato"). Esto nos permite optimizar tu página para que aparezca en los resultados de búsqueda relevantes.
						</p>
					</div>
				</div>
				<div className="dev-steps">
					<div className="dev-number">
						<p>2</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Análisis de la Competencia:</span> Estudiamos a tus principales competidores online en León para identificar sus fortalezas y debilidades, y así crear una estrategia que te permita destacar. 
					</div>
				</div>
				<div className="dev-steps">
						<div className="dev-number">
							<p>3</p>
						</div>
					<div className="dev-step">
						<span className="yellow-important-text">Diseño Personalizado: </span>Creamos un diseño único y atractivo que refleje la identidad de tu marca y sea fácil de navegar para tus usuarios. 
					</div>
				</div>  
				<div className="dev-steps">
					<div className="dev-number">
						<p>4</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Desarrollo en Código Puro (React y/o Laravel):</span> Construimos tu página web utilizando tecnologías robustas y escalables como React y/o Laravel. Esto garantiza un rendimiento superior, mayor seguridad y evita los problemas comunes asociados con plataformas como WordPress y sus actualizaciones. ¡Tu página siempre funcionará sin fallos de código!
					</div>
				</div>  
				<div className="dev-steps">
					<div className="dev-number">
						<p>5</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">SEO On-Page:</span> Optimizamos cada elemento de tu página (textos, imágenes, enlaces, meta descripciones, etc.) para mejorar su visibilidad en los motores de búsqueda.
					</div>
				</div>    
			</div>
			<div className="section-column">
				<div className="dev-steps">
					<div className="dev-number">
						<p>6</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Velocidad de Carga Optimizada:</span> Nos aseguramos de que tu página web cargue rápidamente en cualquier dispositivo. Una página rápida mejora la experiencia del usuario y es un factor importante para el posicionamiento en Google.
					</div>
				</div>
				<div className="dev-steps">
					<div className="dev-number">
						<p>7</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Diseño Responsive (Adaptable a Móviles):</span> Tu página web se verá y funcionará perfectamente en computadoras de escritorio, tablets y teléfonos móviles. ¡La mayoría de tus clientes buscarán desde sus dispositivos móviles!
					</div>
				</div>
				<div className="dev-steps">
					<div className="dev-number">
						<p>8</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Pruebas Exhaustivas:</span> Realizamos pruebas rigurosas para asegurar que todas las funcionalidades de tu página web funcionen correctamente antes de su lanzamiento. 
					</div>
				</div>
				<div className="dev-steps">
					<div className="dev-number">
						<p>9</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Lanzamiento y Configuración:</span> Ponemos tu página web en línea y la configuramos correctamente para su funcionamiento óptimo.
					</div>
				</div>
				<div className="dev-steps">
					<div className="dev-number">
						<p>10</p>
					</div>
					<div className="dev-step">
						<span className="yellow-important-text">Seguimiento y Monitoreo Mensual:</span> Te proporcionamos un seguimiento continuo utilizando herramientas como Google Search Console (para analizar el rendimiento en las búsquedas de Google) y Google Analytics (para entender el comportamiento de tus visitantes). Esto nos permite identificar áreas de mejora y optimizar tu estrategia de SEO a lo largo del tiempo.
					</div>
				</div>
			</div>
			</div>
		</div>
		
		{/* end proceso */}
			
		{/* oferta */}
		<div className="section-subtitle-gray">
			<h2>Nuestra Oferta Exclusiva para Negocios en León Guanajuato</h2>
		</div>
		<div className="section-columns">
			<div className="section-column">
				<div className="offert-image">
					<div className="yellow-color"></div>
					</div>
				</div>
		  	<div className="section-column">
				<div className="inside-section-subtitle-graytransparent">
					<h5>
						Al elegirnos para el desarrollo de tu página web, obtendrás un paquete completo diseñado para tu éxito online:
					</h5>
				</div>
				<span>
					<ul>
					<li>Diseño Web Profesional y Personalizado.</li>
					<li>Fotografía profesional 4K de tu negocio</li>
					<li>Hosting de Alto Rendimiento GRATIS por 1 año.</li>
					<li>Dominio (www.tunegocio.com) GRATIS por 1 año.</li>
					<li>Certificado de Seguridad SSL GRATIS: Este certificado (el candadito que aparece en la barra de direcciones) es crucial para proteger la información de tus visitantes y generar confianza. ¡Google también lo considera un factor importante para el SEO!</li>
					<li>Sin Límite de Imágenes: Carga todas las imágenes de alta calidad que necesites para mostrar tus productos o servicios.</li>
					<li>Sin Límite de Secciones (Excepto en Landing Pages): Crea todas las páginas y secciones necesarias para presentar tu negocio de manera completa.</li>
					<li>Ancho de Banda Ilimitado: No te preocupes por que tu página se caiga si tienes mucho tráfico. ¡Siempre estará disponible!</li>
					<li>Hasta 20 Direcciones de Correo Electrónico Personalizadas: Crea correos profesionales con el nombre de tu dominio (ejemplo: info@tunegocio.com).</li>
					</ul>
				</span>
					<div className="inside-section-subtitle-graytransparent">
						<h5>
							¡Garantía de Satisfacción! Estamos tan seguros de la calidad de nuestro trabajo que te ofrecemos 3 meses de funcionamiento como prueba o la devolución de tu dinero si no estás satisfecho con los resultados.
						</h5>
					</div>
			</div>
		</div>
		
		{/* end oferta */}
		
		<div className="section-subtitle-gray">
			<h2>¡Da el Salto Digital con Nosotros!</h2>
			<h3>No esperes más para tener la presencia online que tu negocio en León Guanajuato merece.</h3>
			<h4>	Contáctanos hoy mismo para una consulta gratuita y descubre cómo podemos ayudarte a alcanzar tus metas en el mundo digital.</h4>
			<h2>¡Estamos listos para ser tu socio estratégico en el desarrollo web!</h2>
		</div>
		<div className="section-single-medium">
			<a href="/contacto" className="btn-index">Contacto</a>	
		</div>
		<Frameworks></Frameworks>
		<StickyWhatsApp></StickyWhatsApp>
	</div>

  )
}

export default WebDevelopment