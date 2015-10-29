<?php
class main extends CI_Model {
	public function register_user($post)
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("name", "Name", 
			"required");
		$this->form_validation->set_rules("email", "Email", 
			"required|valid_email|is_unique[users.email]");
		$this->form_validation->set_rules("password", "Password", 
			"required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Confirm Password", 
			"required|matches[password]");
		if($this->form_validation->run() !== FALSE)
		{
			$name = $post['name'];
			$email = $post['email'];
			$password =$post['password'];
			$age = $post['age'];
			$query = "INSERT INTO users (name, email, password, age)
			VALUES (?,?,?,?)";
			$this->db->query($query, array($name, $email, $password, $age));
			return $this->db->insert_id();
		}else{
			$errors = validation_errors();
			return $errors;
		}
	}
	public function login_user($post)
	{
		$email = $post['email'];
		$query = "SELECT * FROM users WHERE email = ?";
		$user = $this->db->query($query,array($email))->row_array();
		$this->session->set_userdata('user_info', $user);
		if($user){
			if($user['password'] == $post['password'])
			 {
			 	return $user['id'];
			 }
			}
		return "Invalid Email and Password Confirmation";
	}
	public function store_interest($post)
	{
		// foreach($post as $posts)
		// {
		// 	$query = "INSERT INTO users_interests (user_id, interest_id)
		// 	VALUES (?, ?)";
		// 	$this->db->query($query, array($this->session->userdata('user_id'), $posts));
		// }
	}
}
?>