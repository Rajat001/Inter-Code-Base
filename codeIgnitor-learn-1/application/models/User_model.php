<?php 
	class User_model extends CI_model{
		public function create($formArray){
			$this->db->insert('users' , $formArray); // Here users is table name and $formArray is the data that we get from form that will be Stored into database ...
		}

		public function all(){
			return $this->db->get('users')->result_array(); // Get All Records From Database And Here db means Database ...
		}

		public function getUser($userId){
			$this->db->where('user_id' , $userId);
			return $user = $this->db->get('users') -> row_array(); // For Getting Single Record , we use row_array() ...
		}

		public function updateUser($userId , $formArray){
			$this->db->where('user_id' , $userId);
			$this->db->update('users' , $formArray);
		}

		public function deleteUser($userId){
			$this->db->where('user_id' , $userId);
			$this->db->delete('users');
		}
	}
 ?>