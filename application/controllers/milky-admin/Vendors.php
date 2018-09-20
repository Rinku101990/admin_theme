<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vendors extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/vendors');
		$this->load->view('milky-admin/includes/footer');
	}
	public function addVendor()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/addVendor');
		$this->load->view('milky-admin/includes/footer');
	}
	public function vendorProfile()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/vendorProfile');
		$this->load->view('milky-admin/includes/footer');
	}
	
}