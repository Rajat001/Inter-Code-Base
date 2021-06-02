<?php 

	class User extends CI_controller{

		public function index(){
			$this->load->model('User_model');
			$users = $this->User_model->all();

			$data = array(); // Simple Array
			$data['userss'] = $users;

			$this->load->view('list' , $data); // Here all data Will be Show , using Select Query Here ...
		}

		public function show($userId){
			$this->load->model('User_model');
			$user = $this->User_model->getUser($userId); // getUser is function In User_model Model ...
			$data = array();
			$data['user'] = $user; // Pass into array ...
			$this->load->view('edit' , $data);
		}

		public function create(){
			 
			$this->load->model('User_model'); // Here Loading the Model class, From Model Folder
			$this->form_validation->set_rules('name','Name' , 'required');
			$this->form_validation->set_rules('email','Email' , 'required');

			if($this->form_validation->run() == false){
				$this->load->view('create');	
			}else{
				$formArray = array();
				$formArray['name'] = $this->input->post('name');
				$formArray['email'] = $this->input->post('email');
				$formArray['created_at'] = date('Y-m-d');

				$this->User_model->create($formArray);
				$this->session->set_flashdata('success' , 'Record Added Success');
				redirect(base_url() . 'index.php/User/index');

			}
		}


		public function edit($userId){
			$this->load->model('User_model');
			$user = $this->User_model->getUser($userId);
			$data = array();
			$data['user'] = $user;			

			$this->form_validation->set_rules('name','Name' , 'required');
			$this->form_validation->set_rules('email','Email' , 'required');

			if($this->form_validation->run() == false){
				$this->load->view('edit' , $data);	
			}else{
				$formArray = array();
				$formArray['name'] = $this->input->post('name');
				$formArray['email'] = $this->input->post('email');
				
				$this->User_model->updateUser($userId , $formArray);
				$this->session->set_flashdata('success' , 'Record Updated Successfully');
				redirect(base_url() . 'index.php/User/index');

			}
		}


		public function delete($userId){
			$this->load->model('User_model');
			$user = $this->User_model->getUser($userId);
			if(empty($user)){
				$this->session->set_flashdata('failure', 'Record Not Found in Database');
				redirect(base_url() . 'index.php/User/index');
			}else{
				$this->User_model->deleteUser($userId);
				$this->session->set_flashdata('success' , 'Record Deleted Successfully');
				redirect(base_url() . 'index.php/User/index');
			}
		}

	}
 ?>