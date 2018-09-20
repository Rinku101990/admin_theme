<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Complaints extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/buyerComplaints');
		$this->load->view('milky-admin/includes/footer');
	}
	public function vendorComplaints()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/vendorComplaints');
		$this->load->view('milky-admin/includes/footer');
	}
	
}