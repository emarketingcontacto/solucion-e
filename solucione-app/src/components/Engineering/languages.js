import React from 'react';
import './languages.css'; 
import C from '../images/engine/csharp.webp'; 
import PHP from '../images/engine/php3.webp'; 
import Javascript from '../images/engine/javascript.webp'; 
import Typescript from '../images/engine/typescript.webp'; 
import Transact from '../images/engine/sqlserver.webp'; 


const languages = () => {
	return (
		<div className='container-languages'>
			<h2 className='section-subtitle'>Languajes de Programación</h2>
		<div className="languages">
			<div className="languages-item">
				<img src={C} alt="c#" style={{ width: 50, height: 60 }}/>
			</div>
			<div className="languages-item">
				<img src={PHP} alt="php" style={{ width: 50, height: 60 }}/>
			</div>
			<div className="languages-item">
				<img src={Javascript} alt="php" style={{ width: 50, height: 60 }}/>
			</div>
			<div className="languages-item">
				<img src={Typescript} alt="php" style={{ width: 50, height: 60 }}/>
			</div>
			<div className="languages-item">
				<img src={Transact} alt="php" style={{ width: 120, height: 120 }}/>
			</div>
		</div>
	</div>
  )                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             
}

export default languages