<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Usermodel');// model name
		$result=$this->Usermodel->getUserdata();// Model method
		$data['name'] = $result;
		$this->load->view('user',$data);
	}
}
