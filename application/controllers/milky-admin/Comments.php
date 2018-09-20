<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Comments extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/comments');
		$this->load->view('milky-admin/includes/footer');
	}
	public function buyerProfile()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/buyerProfile');
		$this->load->view('milky-admin/includes/footer');
	}
	public function invoiceBuyer()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/invoiceBuyer');
		$this->load->view('milky-admin/includes/footer');
	}
	
}