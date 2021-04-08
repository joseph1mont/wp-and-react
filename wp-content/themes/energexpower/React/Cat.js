import React from 'react';
import './Cat.css'

const cat = (props) => {
    return (
    <div className="category col-md-6 col-xl-3">
    <div className="category__content">
        <img src="#" />
        <p className="category__text">{props.categoryName}</p>
    </div>
    </div>
    )
};

export default cat;