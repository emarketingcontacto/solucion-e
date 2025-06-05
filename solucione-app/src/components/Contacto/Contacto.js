import React, { useState } from 'react'; 
import './Contacto.css'; 
import Button from 'react-bootstrap/Button';
import Modal from 'react-bootstrap/Modal';
import StickyWhatsApp from '../stickyWhatsApp'; 


const Contacto = () => {
	//Variables 
	const [show, setShow] = useState(false); 

	const[recipient, setRecipient] = useState('emarketing.contacto@gmail.com')

	const [contactData, setContactData] = useState(
		{
			name: '', 
			email: '', 
			date: '', 
			time: '', 
			message:''
		}); 
	//Errors
	const [contactErrors, setContactErrors] = useState([]); 
	
	//Methods
	const handleClose = () => setShow(false); 
	const handleShow = () => setShow(true); 

	// handle Change 
	const handleChange = (event) => {
		const { name, value } = event.target;
		setContactData({
			...contactData, [name]: value
		})
	}; 

	const handleSubmit = (event) => { 
		event.preventDefault(); 
		console.log(contactData.time)
		//Validations
		const validations = {}; 
		if (!contactData.name.trim())
			validations.name = 'Nombre es un campo requerido'; 
		if(!contactData.email.trim())
			validations.email = 'Email es un campo requerido'; 
		if(!contactData.date.trim())
			validations.date = 'Fecha es un campo requerido'; 
		if(!contactData.time.trim())
			validations.time = 'Hora es un campo requerido'; 
		if(!contactData.message.trim())
			validations.message = 'Hora es un campo requerido'; 

		setContactErrors(validations); 

		if (Object.keys(validations).length === 0) { 
			//Send Mail 
			const mailtoLink = `mailto:${recipient}?subject='Cita'&body=${contactData.name, contactData.date, contactData.time, contactData.message}`
			window.location.href = mailtoLink; 
		}
	}

  return (
	  <div className="testing-hero">
		<div className="herodev-header-text">
			<h3>NECESITA UNA SUPER PRUEBA?</h3>
		</div>
			<div className="make-contact">
				<div className="contact contact-border-right">
					<div className="testing-text">
		  				Programe una consulta gratuita.
					</div>
					<div className='text-center'>
						<Button className="btn btn-yellow" onClick={handleShow}>
		  					Programar Cita
		  				</Button>	  
					</div>  
				</div>
				<div className="contact">
					<div className="testing-text">
						Llame para discutir su proyecto.
					</div>
						<div className='text-center'>
							<a href="tel:+01524771598183" className='btn-index'>Llamar</a>
					</div>  
				</div>  

				<div className="contact contact-border-left">
					<div className="testing-text">
						Envíe un correo para más Información.
					</div>
					<div className='text-center'>
						<a href="mailto:contacto@solucion-e.com" className='btn-index'>Enviar Correo</a>
					</div>  
				</div>  
			</div>

		<Modal show={show} onHide={handleClose}>
			<Modal.Header closeButton>
			<Modal.Title>Cita</Modal.Title>
			</Modal.Header>
			  <Modal.Body>
				  <form onSubmit={handleSubmit}>
					  <div className="form-group">
						  <label htmlFor="name">Nombre</label>
						  <input type="text" name="name" className="form-control" value={contactData.name} onChange={handleChange} />
						  <p className="text-danger">{contactErrors.name }</p>
					  </div>
					  <div className="form-group">
						  <label htmlFor="email">Email</label>
						  <input type="email" name="email" className="form-control" value={contactData.email} onChange={handleChange} />
						  <p className="text-danger">{contactErrors.email }</p>
					  </div>
					 
					  <div className="form-group">
						  <label htmlFor="date">Fecha</label>
						  <input type='date' name="date" className="form-control" value={contactData.date} onChange={handleChange} />
						  <p className="text-danger">{contactErrors.date }</p>

					  </div>
					  <div className="form-group">
						  <label htmlFor="time">Hora</label>
						  <input type='time' name="time" className="form-control" value={contactData.time} onChange={handleChange} />
						  <p className="text-danger">{contactErrors.time }</p>
						  
					  </div>
					  <div className="form-group">
						  <label htmlFor="message">Mensaje</label>
						  <textarea name="message" cols={10} rows={3} className="form-control" value={contactData.message} onChange={handleChange} />
						  <p className="text-danger">{contactErrors.message }</p>

					  </div>

					  <Button type='submit' variant="primary">
						  Enviar
					  </Button>
				  </form>
			</Modal.Body>
			  <Modal.Footer>
				  
			
				  
			<Button className='btn' variant='danger' onClick={handleClose}>
				Cerrar
			</Button>
			
			</Modal.Footer>
		</Modal>

		<StickyWhatsApp></StickyWhatsApp>  
	</div>
  )
  
}

export default Contacto