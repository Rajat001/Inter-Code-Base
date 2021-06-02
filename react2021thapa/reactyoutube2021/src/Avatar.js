import React, {Component} from 'react';
import './avatar.css';
import AvatarList from './AvatarList';
import 'tachyons';

// Creating Functional Components i.e. const Avatar = { ..... } Below

 
	class Avatar extends Component{

		constructor(){
			super();
			this.state = {
				name : "Welcome To Avatar Worlds"
			}
		}

		onChangeHeading(){
			this.setState({
				name : "Welcome To Thapa World"
			})
		}

		render(){
				const avatarArrayList = [
							{
								id : 1,
								name : "Vinod",
								work : "Web Developer"
							},
							{
								id : 2,
								name : "Bahadur",
								work : "Android Developer"
							},
							{
								id : 3,
								name : "Thapa",
								work : "IOS Developer"
							},
							{
								id : 4,
								name : "ThapaTechnical",
								work : "Database"
							}
						]						

			const avatarArrayListMap = avatarArrayList.map((avatarCard , i) => {
				return 	<AvatarList key={i} id={avatarArrayList[i].id} name={avatarArrayList[i].name} work={avatarArrayList[i].work}/>
			})						

	return 	(
			<div className="mainpage">
				<h1> {this.state.name} </h1>
					
				{avatarArrayListMap}

				<button onClick = { () => this.onChangeHeading() }> Subscribe </button>
			</div>
			)
		}
	}

export default Avatar;