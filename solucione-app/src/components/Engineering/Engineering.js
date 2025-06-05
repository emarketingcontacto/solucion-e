import React from 'react'; 
import './Engineering.css'; 
import Languages from './languages'; 
import BtnContact from '../BtnContact';
import StickyWhatsApp from '../stickyWhatsApp'; 

const Engineering = () => {
  return (
	  <div className="engineering-container">
		  <div className="hero-engine">
			<div className="herodev-header-text">
				  <h1>
					 Desarrollo de Software en León, Guanajuato
				</h1>
			</div>
		  </div>

		  <div className="engine-intro">
			  <div className="section-yellow section-title">
				  <h2>Optimiza tu Negocio en León con la Programación a Medida que Mereces </h2>
			  </div>
			  <div className="section-single">
				<p>
					¿Sientes que los sistemas "pre-fabricados" no se ajustan a la perfección a la forma única en que opera tu empresa en León, Guanajuato? 
					<p>
						En la era digital, la programación a medida en León Guanajuato es la solución definitiva para empresas que buscan una ventaja competitiva real. 
				  		<p>
						Olvídate de adaptar tus procesos al software; ¡es hora de que el software se adapte a tus procesos!
		     			</p>
				  	</p>
				</p>
			  </div>
		  </div>

		<div className="tranformation">
			<div className="section-subtitle-gray">
				<h3>¿Cómo un Desarrollo de Software Personalizado Transforma la Gestión de tu Empresa?</h3>
			</div>
			<div className="section-columns">
				<div className="section-column text-medium">
					<p>
						Imagina tener una herramienta diseñada exclusivamente para ti, que hable el mismo
						idioma que tu negocio. Un sistema de información a medida no es solo un lujo,
						es una inversión inteligente que te permite:
					</p>
						<p>
							<ul>
								<li>
								<strong>Automatizar Tareas Repetitivas:</strong> Libera a tu equipo de tareas manuales tediosas y propensas a errores.
								Desde la gestión de inventarios y facturación hasta el seguimiento de clientes, el software personalizado lo hace por ti, más rápido
								</li>
								<li>
								<strong>Centralizar tu Información:</strong> Dile adiós a los datos dispersos en hojas de cálculo y programas incompatibles.
								Un sistema a medida consolida toda tu información vital en un solo lugar, facilitando el acceso y la toma de decisiones.
								</li>
								<li>
								<strong>Mejorar la Toma de Decisiones:</strong> Con datos precisos y actualizados al instante, podrás analizar el rendimiento de tu empresa,
								identificar áreas de oportunidad y tomar decisiones estratégicas con confianza.
								</li>
								<li>
								<strong>Optimizar tus Procesos Específicos:</strong> Cada empresa tiene flujos de trabajo únicos.
								Un software personalizado se diseña para reflejar y potenciar esos procesos, eliminando cuellos de botella y aumentando la
								eficiencia general.
								</li>
								<li>
								<strong>Reducir Errores y Costos:</strong> Al automatizar y estandarizar operaciones, minimizas los errores humanos, lo que se traduce en menos
								retrabajos y, finalmente, en una reducción significativa de costos operativos.
								</li>
								<li>
								<strong>Escalabilidad a tu Ritmo:</strong> A medida que tu empresa crece, tu software crece contigo. Una solución a medida es flexible y se puede
								expandir para incorporar nuevas funcionalidades o manejar un mayor volumen de información sin problemas.
								</li>
								<li>
								<strong>Ventaja Competitiva: </strong> Al operar de manera más eficiente y tener acceso a información que tus competidores no tienen, obtendrás
								una clara ventaja en el mercado de León.
								</li>
							</ul>
						</p>  
						<span>
						Ya sea que gestiones una pequeña carpintería, una empresa de transportes o una constructora, un sistema de información a medida puede revolucionar la forma en que administras tus proyectos, clientes, inventarios o cualquier otro aspecto crucial de tu operación.
						</span>
				</div>
				<div className="section-column">
					<div className="engine-trans-column">
						<div className="yellow-color"></div>
					</div>
				</div>
			</div>  
			
		</div>

		<Languages></Languages>	
		  
		<div className="section-subtitle-gray container-languages">
			<h3>
				Nuestro Proceso de Desarrollo de Software a Medida
	  		</h3>
		</div>

		<div className="engine-process">
			<div className="section-columns">
				<div className='engine-order-list'>
					<div className="engine-order-list-column">
						<h5>Levantamiento de Requerimientos y Análisis:</h5>
						<p>Nos sentamos contigo para entender a fondo tus operaciones, tus problemas actuales y tus objetivos.</p> 
					</div>	  
					<div className="engine-order-list-column">
							<h5>Documentamos cada detalle:</h5>
							<p>Qué necesitas que haga el software, quién lo usará, qué información manejará y cómo se integrará en tu
								flujo de trabajo diario. </p>
					</div>
					
					<div className="engine-order-list-column">
						<h5>Diseño y Planificación:</h5>
							<p>Con los requerimientos claros, diseñamos la arquitectura del sistema.
							<p>Esto incluye cómo se verá (interfaz de usuario),</p>
							  <ul>
								  <li>Cómo funcionará internamente (lógica de negocio)</li>
								  <li>Cómo se organizarán los datos (base de datos).</li>
								  <li>Creamos un "plano" detallado que tú apruebas antes de programar.</li>
							  </ul>

									
									
						</p>
					</div>
					<div className="engine-order-list-column">
							<h5>Desarrollo y Programación:</h5>
							<p>Aquí es donde nuestros expertos programadores construyen el software pieza por pieza.
								<p>Utilizamos lenguajes de programación robustos y probados como PHP y C#, en los que contamos con más de 15 años de experiencia.
								<p>Esto nos permite crear soluciones eficientes, seguras y escalables que son el corazón de tu nuevo sistema.</p>
							</p>
							</p>
					</div>
					<div className="engine-order-list-column">
						<h5>Pruebas de Calidad:</h5>
						<p>Una vez desarrollado, el software pasa por rigurosas pruebas.
						Verificamos que todas las funcionalidades operen correctamente, que no haya errores (bugs) y que el sistema sea intuitivo y fácil de
						usar. Realizamos pruebas de rendimiento y seguridad para garantizar su estabilidad.
						</p>
					</div>
					<div className="engine-order-list-column">
						<h5>Implementación y Puesta en Marcha:</h5>
						<p>Instalamos y configuramos el software en tu entorno.
							<p>Nos aseguramos de que todo funcione sin problemas y, si es necesario, migramos tus datos existentes al nuevo sistema.</p>
						</p>
					</div>
					<div className="engine-order-list-column">
						<h5>Capacitación y Soporte:</h5>
						<p>Capacitamos a tu equipo para que utilicen el nuevo sistema con confianza y eficiencia.
							Además, ofrecemos soporte post-implementación para resolver cualquier duda o eventualidad que pueda surgir.
						</p>
					</div>
						
				</div>  
			</div>
		</div>
		  <div className="section-subtitle-gray">
			<h4>
				En cada proyecto de programación a medida en León Guanajuato, seguimos un proceso estructurado
				para garantizar que el resultado final supere tus expectativas y resuelva tus desafíos:
			</h4>  
		  </div>
		  <BtnContact></BtnContact>
		  <StickyWhatsApp></StickyWhatsApp>
	</div>
  )
}

export default Engineering