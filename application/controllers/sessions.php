<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sessions extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->output->enable_profiler(FALSE);
			$this->load->model('main');
			$this->load->model('sql');
	}
	public function index(){
	$users = $this->session->userdata('user_info');
	$interests = $this->db->get('interests')->result_array();
	$data = array(
		'users' => $users,
		'interests' => $interests
		);
	$this->load->view('topic', $data);
	}
	public function store_interest(){
	$interests = $this->main->store_interest($this->input->post());
		redirect("/sessions/dashboard");
	}
	public function dashboard(){
		$links = $this->db->get('links')->result_array();
		$interests = $this->sql->get_all_interest();
		$random = rand(1,count($links));
		$links = $this->sql->get_interest_by_id($random);
		$links2 = $this->sql->get_id_by_id($random);
		$data = array(
			"links" => $links,
			"links2" => $links2,
			'interests' => $interests
			);

	$this->load->view('dashboard', $data);
	}
	public function specific($id){
		$this->sql->get_interest_by_id($id);
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect("/");
	}

}
?>