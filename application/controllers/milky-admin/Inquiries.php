<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inquiries extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/buyerInquiries');
		$this->load->view('milky-admin/includes/footer');
	}
	public function vendorInquiries()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/vendorInquiries');
		$this->load->view('milky-admin/includes/footer');
	}
	
}