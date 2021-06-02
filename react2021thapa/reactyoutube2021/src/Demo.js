import React,{Component} from 'react';
import ReactDom from 'react-dom';
import './Demo.css';


// Below is Functional Components

  const Demo = ({name}) => {
  				return  <div className="main_div"> // We have To Take Div To Insert Data Into This One Div
				<h1> <i> Demo Page Is Loaded Here !!! </i> </h1>
			    <p> {name}  , is The Name That Called From Parent File i.e. Index.js File </p>
			    </div>	
  }

// Below is Component Based Architecture

// class Demo extends Component{ // Demo is the component for Now ...
// 	render(){
// 		return  <div className="main_div"> // We have To Take Div To Insert Data Into This One Div
// 				<h1> <i> Demo Page Is Loaded Here !!! </i> </h1>
// 			    <p> {this.props.name}  , Now I had Added Another Line Of Code </p>
// 			    </div>		
// 	}
// }

export default Demo;