<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Buyers extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/buyers');
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