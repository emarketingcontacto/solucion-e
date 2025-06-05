import React from 'react'; 
import './Marketing.css'; 
import '../../App.css'; 
import BtnContact from '../BtnContact';
import StickyWhatsApp from '../stickyWhatsApp'; 

const Marketing = () => {
	return (
		<div className="main-container">
			<div className="mkt-hero">
				<div className="herodev-header-text">
					<h1>Anuncios Publicitarios por Internet en León, Guanajuato</h1>
				</div>
			</div>

			<div className="mkt-intro">
				<div className="section-title">
					<h2>¿Necesitas que tu negocio en León atraiga clientes de forma rápida y efectiva?</h2>
				</div>	
				<div className="section-subtitle-gray">
						<h3>Una página web es fundamental, pero a veces necesitas un impulso inmediato </h3>
						<h4>Aquí es donde los <span className='text-yellow'>anuncios publicitarios por Internet </span>entran en juego, poniéndote frente a tus clientes ideales justo
							cuando están buscando lo que tú ofreces.
						</h4>
				</div>
					
			</div>
			
			{/* anuncios */}
			<div className="section-single">
				<h4>
					Las campañas de pago pueden acelerar el crecimiento de tu empresa.
				</h4>	
			</div>
			<div className="section-columns">
				<div className="section-column">
					<div className="section-anouncements">
						<div className="yellow-color"></div>
					</div>
				</div>
				<div className="section-column">
					<h4>
						¿Qué son los Anuncios Publicitarios por Internet (Marketing SEM)?
					</h4>
					<p>
						El <strong>Marketing SEM (Search Engine Marketing)</strong> es, en pocas palabras, la forma de <strong>pagar para que
							tu negocio aparezca en los primeros lugares de Google y en las redes sociales</strong>.
					</p>
					<p>Es una manera rápida y directa de obtener visibilidad y atraer tráfico cualificado a tu página web o a tus perfiles
						sociales.
					</p>
					<p>
						A diferencia del SEO (que es orgánico y a largo plazo), con el SEM tú pagas por cada clic o por cada vez que tu anuncio es visto, lo que te permite controlar tu inversión y obtener resultados casi de inmediato.
					</p>
				</div>
			</div>
		
			{/* beneficios */}
			<div className="section-columns">
				<div className="section-column">
					<h4>Beneficios clave para tu negocio en León:</h4>
					<ul>
						<li>
							*Resultados Rápidos:** Empieza a aparecer en Google y redes sociales en cuestión de horas o días.
						</li>
						<li>
							* **Segmentación Precisa:** Dirige tus anuncios solo a las personas que te interesan (por ubicación, intereses, edad, etc.).
						</li>
						<li>
							* **Control Total del Presupuesto:** Tú decides cuánto quieres invertir, y puedes ajustar tus campañas en cualquier momento.
						</li>
						<li>
							* **Visibilidad Inmediata:** Tu negocio se muestra justo cuando los clientes potenciales están buscando tus productos o servicios.
						</li>
						<li>
							* **Medición Clara:** Sabrás exactamente cuántos clics recibes, cuántas llamadas generas y cuánto te cuesta cada resultado.
						</li>
					</ul>
			</div>
				<div className="section-column">
					<div className="section-adds">
						<div className="yellow-color"></div>
					</div>
				</div>
			</div>
			

			{/* tipos de anuncios google */}
			<div className="section-subtitle">
				<h4>Campañas de Publicidad Pagada en Google (Google Ads)</h4>
			</div>
			
			<div className="section-adds-google">
				<div className="section-subtitle-gray  section-black-stronger">
					<h4 className='section-yellow-text'><center>
						Google Ads es la plataforma de publicidad de Google, y te permite aparecer en los resultados de búsqueda, en páginas web
						asociadas y en YouTube. 
					</center></h4>
					<h5 className='section-yellow-text'>
						Es ideal para captar a clientes en el momento exacto en que buscan soluciones.
					</h5>
				</div>
			</div>
			

			<div className="section-subtitle-gray">
				<h4>
					Tipos de Anuncios de Google Ads que ofrecemos:**
				</h4>
			</div>

			<div className="section-google-ads-container">
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-blockquote-left" viewBox="0 0 16 16">
						<path d="M2.5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1zm5 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1zm-5 3a.5.5 0 0 0 0 1h11a.5.5 0 0 0 0-1zm.79-5.373q.168-.117.444-.275L3.524 6q-.183.111-.452.287-.27.176-.51.428a2.4 2.4 0 0 0-.398.562Q2 7.587 2 7.969q0 .54.217.873.217.328.72.328.322 0 .504-.211a.7.7 0 0 0 .188-.463q0-.345-.211-.521-.205-.182-.568-.182h-.282q.036-.305.123-.498a1.4 1.4 0 0 1 .252-.37 2 2 0 0 1 .346-.298zm2.167 0q.17-.117.445-.275L5.692 6q-.183.111-.452.287-.27.176-.51.428a2.4 2.4 0 0 0-.398.562q-.165.31-.164.692 0 .54.217.873.217.328.72.328.322 0 .504-.211a.7.7 0 0 0 .188-.463q0-.345-.211-.521-.205-.182-.568-.182h-.282a1.8 1.8 0 0 1 .118-.492q.087-.194.257-.375a2 2 0 0 1 .346-.3z"/>
						</svg>
					</div>
					<h5>Anuncios de Búsqueda (Texto):</h5>
					<p>¿Qué son?** Son los anuncios de texto que ves en los primeros lugares de Google cuando haces una búsqueda (aparecen con la etiqueta "Anuncio" o "Patrocinado").</p>
					<p>¿Para quién son?** Perfectos para negocios en León que quieren captar clientes con una intención de compra clara. Si alguien busca "cerrajería de emergencia León" o "distribuidor de tornillos industriales Guanajuato", tu anuncio puede aparecer.</p>
					<p>Beneficio para tu negocio:** Te posiciona al instante frente a clientes que ya saben lo que necesitan y están buscando un proveedor.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-easel-fill" viewBox="0 0 16 16">
  						<path d="M8.473.337a.5.5 0 0 0-.946 0L6.954 2H2a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h1.85l-1.323 3.837a.5.5 0 1 0 .946.326L4.908 11H7.5v2.5a.5.5 0 0 0 1 0V11h2.592l1.435 4.163a.5.5 0 0 0 .946-.326L12.15 11H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H9.046z"/>
						</svg>
					</div>
					<h5>Anuncios Gráficos (Display):</h5>
					<p>¿Qué son?** Son anuncios visuales (imágenes, banners) que aparecen en millones de páginas web, blogs y aplicaciones.</p>
					<p>¿Para quién son?** Ideales para construir reconocimiento de marca en León y llegar a un público más amplio. Permiten "recordarle" a usuarios que ya visitaron tu web (remarketing) o mostrar tus productos a personas con intereses específicos.</p>
					<p>Beneficio para tu negocio:** Mantienes tu marca en la mente de tus clientes potenciales y atraes a quienes quizás aún no estaban buscando activamente, pero tienen un interés en tu sector.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-play-fill" viewBox="0 0 16 16">
  						<path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M6 5.883a.5.5 0 0 1 .757-.429l3.528 2.117a.5.5 0 0 1 0 .858l-3.528 2.117a.5.5 0 0 1-.757-.43V5.884z"/>
						</svg>
					</div>
					<h5>Anuncios de Video (YouTube Ads):</h5>
					<p>¿Qué son?** Anuncios que se muestran antes, durante o después de los videos en YouTube, la segunda plataforma de búsqueda más grande del mundo.</p>
					<p>¿Para quién son?** Excelentes para negocios que pueden mostrar sus productos o servicios de forma visual y atractiva (maquinaria, procesos de fabricación, servicios que requieren demostración, etc.).</p>
					<p>Beneficio para tu negocio:** Conectas con tu audiencia de una forma más personal y visual, aumentando el impacto de tu mensaje y llegando a un público masivo interesado en contenido de video.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart4" viewBox="0 0 16 16">
  						<path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5M3.14 5l.5 2H5V5zM6 5v2h2V5zm3 0v2h2V5zm3 0v2h1.36l.5-2zm1.11 3H12v2h.61zM11 8H9v2h2zM8 8H6v2h2zM5 8H3.89l.5 2H5zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0m9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2m-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0"/>
						</svg>
					</div>
						<h5>Anuncios de Shopping (Google Shopping):</h5>
						<p>¿Qué son? Son los anuncios que muestran tus productos directamente en los resultados de búsqueda de Google, con imagen, precio y nombre de tu tienda.</p>
						<p>¿Para quién son?** Indispensables para tiendas online y negocios en León que venden productos físicos (calzado, ropa, autopartes, etc.).</p>
						<p>Beneficio para tu negocio:** Los clientes pueden ver tu producto y precio antes de hacer clic, lo que atrae a compradores con alta intención y reduce el costo por clic.</p>
				</div>
			</div>

			{/* redes sociales */}
			<div className="section-subtitle">
				<h4>Campañas de Publicidad Pagada en Redes Sociales (Social Ads)</h4>
			</div>
			<div className="section-subtitle-gray">
				<center>
				<h5>Las redes sociales no son solo para compartir fotos; son plataformas de publicidad increíblemente poderosas para llegar a audiencias específicas con tus anuncios publicitarios por Internet.</h5>
				</center>
			</div>
			<div className="section-google-ads-container">
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
  						<path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
						</svg>
					</div>
					<h5>Facebook Ads (e Instagram Ads):</h5>
					<p>¿Para qué sirven? Ideales para llegar a tu audiencia por sus intereses, comportamientos, edad, género y ubicación (incluyendo León, Guanajuato).</p>
					<p>Beneficio para tu negocio:Perfectas para construir comunidad, generar leads, dirigir tráfico a tu web, promocionar eventos o vender productos/servicios con una segmentación muy detallada. Si tu cliente está en Facebook o Instagram, lo alcanzaremos.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
  						<path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
						</svg>
					</div>
					<h5>X Ads:</h5>
					<p>¿Para qué sirven? Para llegar a audiencias basadas en sus intereses, los temas que siguen, los influencers que admiran y las palabras clave que usan en sus tweets.</p>
					<p>Beneficio para tu negocio: Excelente para lanzar anuncios sobre noticias, eventos, promociones rápidas o para llegar a nichos específicos de discusión en tiempo real.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
  						<path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
						</svg>
					</div>
					<h5>LinkedIn Ads:</h5>
					<p>¿Para qué sirven? La plataforma profesional por excelencia. Te permite segmentar por puesto de trabajo, sector industrial, tamaño de empresa, habilidades e incluso nombre de la empresa.</p>
					<p>Beneficio para tu negocio: Indispensable para empresas B2B (negocio a negocio) en León. Si tu cliente es otra empresa o un profesional específico (por ejemplo, arquitectos, ingenieros, gerentes de planta), LinkedIn es el lugar ideal para mostrar tus servicios o productos industriales.</p>
				</div>
				<div className="section-googleads-column">
					<div className="svg-main">
						<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-youtube" viewBox="0 0 16 16">
  						<path d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"/>
						</svg>
					</div>
					<h5>YouTube Ads:</h5>
					<p>¿Para qué sirven? (Como ya mencionamos en Google Ads, YouTube es parte de Google, pero lo destacamos aquí por su enfoque en video). Te permiten mostrar anuncios de video a audiencias específicas que consumen contenido relacionado con tu negocio.</p>
					<p>Beneficio para tu negocio: Si tu producto o servicio se explica mejor visualmente, o si quieres llegar a una audiencia muy comprometida con el video, YouTube es tu plataforma.</p>
				</div>
			</div>

			{/* porque elegir */}
			<div className="section-subtitle">
				<h4>¿Porqué Elegirnos para tus Anuncios Publicitarios por Internet en León?</h4>
			</div>

			<div className="section-subtitle-gray">
				<center>
					<h5>El Marketing Digital y SEO en León, Guanajuato, es el ecosistema digital local y para hacer que tu inversión en anuncios publicitarios por Internet rindan al máximo.</h5>
				</center>
			</div>

			<div className="section-columns">
				<div className="section-column">
					<ul>
						<li>
							Enfoque en Resultados: No solo creamos anuncios; creamos estrategias que generan clientes y ventas para tu negocio.
						</li>
						<li>
							Gestión Profesional: Manejamos toda la complejidad técnica de las plataformas de publicidad, para que tú te enfoques en tu negocio.
						</li>
						<li>
							Informes Transparentes:** Te proporcionamos reportes claros y entendibles sobre el rendimiento de tus campañas.
						</li>
						<li>
							Optimización Continua:** Monitoreamos y ajustamos tus campañas constantemente para asegurar la máxima eficiencia de tu presupuesto.
						</li>
					</ul>
				</div>
				<div className="section-column">
					<div className="section-adds-why">
						<div className="yellow-color"></div>
					</div>
				</div>
			</div>

			<div className="section-subtitle-gray">
				<center>
					<h4>No dejes pasar la oportunidad de que tus clientes te encuentren hoy mismo</h4>
					<h5>Los anuncios publicitarios por Internet son la vía más rápida para impulsar tu negocio en León.</h5>
				</center>
			</div>
			
			{/* call to action */}
			<div className="section-black-stronger text-yellow">
				<h4>¡Listo para Impulsar tu Negocio con Publicidad Digital?</h4>
			</div>

			<div className="section-columns">
				<div className="section-column-central">
					<div className='text-gray'>
						<h4>¿Quieres que tus productos o servicios aparezcan en los primeros lugares de Google y en las redes sociales, atrayendo a clientes listos para comprar?</h4>
						<h5>Contáctenos hoy mismo para una consulta gratuita y descubramos cómo las campañas de Marketing SEM pueden transformar el crecimiento de su empresa en <strong>León, Guanajuato</strong>.</h5>
					</div>
				</div>
			</div>
			

			<BtnContact></BtnContact>
			<StickyWhatsApp></StickyWhatsApp>
		{/* end main  */}
		</div>
  )
}

export default Marketing