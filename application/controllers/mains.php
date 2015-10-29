<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mains extends CI_Controller {

	public function __construct(){
			parent::__construct();
			$this->output->enable_profiler(FALSE);
			$this->load->model('main');
			$this->load->model('sql');
	}

	public function index()
	{
		$this->load->view('main');
	}
	public function register_user()
	{	
		$user = $this->main->register_user($this->input->post());
		$this->session->set_userdata('user_id', $user);
		$users = $this->sql->get_user_by_id($user);
		if(is_numeric($user))
		{
		$this->session->set_userdata('user_info', $users);
		redirect("/sessions");
		}else{
			$this->session->set_flashdata('register_errors', $user);
			redirect("/");
		}
	}
	public function login_user()
	{
		$result = $this->main->login_user($this->input->post());
		$this->session->set_userdata('user_id', $result);
		if(is_numeric($result)){
			redirect('/sessions/dashboard');
		} else{
			$this->session->set_flashdata('login_errors');
			redirect('/sessions/login_page');
		}
	}
	public function login_page()
	{
		$this->load->view('login');
	}
}
