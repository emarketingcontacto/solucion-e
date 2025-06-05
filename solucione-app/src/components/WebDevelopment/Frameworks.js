import React from 'react'; 
import '../../App.css'; 
import './Frameworks.css'; 
import reacto from '../images/engine/react.webp'; 
import laravel from '../images/engine/laravel.webp'; 
import csharp from '../images/engine/netcore.webp'; 
import nodejs from '../images/engine/nodejs.webp'; 
import wordpress from '../images/engine/wordpress.webp'; 

const Frameworks = () => {
  return (
    <div className="frameworks-main">
      <div className="section-single">
        <div className="section-subtitle">
          <h2 className="section-subtitle">
            Frameworks
          </h2>
        </div>
      </div>
      
      <div className="frameworks-container">
        <div className="frameworks-column">
          <img src={reacto} alt="javascript" srcset="" />
          <h5>ReactJs</h5>
        </div>
        <div className="frameworks-column">
          <img src={laravel} alt="laravel" srcset="" />
          <h5>Laravel</h5>
        </div>
        <div className="frameworks-column">
          <img src={csharp} alt="laravel" srcset="" />
          <h5>C#</h5>
        </div>
        <div className="frameworks-column">
          <img src={nodejs} alt="nodejs" srcset="" />
          <h5>NodeJs</h5>
        </div>

         <div className="frameworks-column">
          <img src={wordpress} alt="wordpress" srcset="" />
          <h5>WordPress</h5>
        </div>
        
      </div>
  </div>
  )
}

export default Frameworks