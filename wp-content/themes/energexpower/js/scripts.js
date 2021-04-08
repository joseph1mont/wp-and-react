import React from 'react';
import ReactDom from 'react-dom';
import Category from '../React/Cat';
import "../css/style.css";

const hhh = () => {
    return (
        <div className='Cat'>
            <Category categoryName='Box1' ></Category> 
            <Category categoryName='Box2' ></Category> 
            <Category categoryName='Box3' ></Category> 
            <Category categoryName='Box4' ></Category> 
            <Category categoryName='Box5' ></Category> 
            <Category categoryName='Box6' ></Category> 
            <Category categoryName='Box7' ></Category> 
            <Category categoryName='Box8' ></Category>
        </div>
    )
};

ReactDom.render(
    hhh(),
    document.querySelector('.cat-row')
)

export default hhh;