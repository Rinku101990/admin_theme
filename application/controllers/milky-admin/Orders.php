<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Orders extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/orders');
		$this->load->view('milky-admin/includes/footer');
	}
	public function transactions()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/transactions');
		$this->load->view('milky-admin/includes/footer');
	}
	
}