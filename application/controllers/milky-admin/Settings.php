<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Settings extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/company-profile');
		$this->load->view('milky-admin/includes/footer');
	}
	public function tax()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/tax');
		$this->load->view('milky-admin/includes/footer');
	}
	public function shippingFees()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/shippingFees');
		$this->load->view('milky-admin/includes/footer');
	}
	public function changePassword()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/change-password');
		$this->load->view('milky-admin/includes/footer');
	}
	public function categories()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/categories');
		$this->load->view('milky-admin/includes/footer');
	}
	public function subcats()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/subCategories');
		$this->load->view('milky-admin/includes/footer');
	}
	public function brands()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/brands');
		$this->load->view('milky-admin/includes/footer');
	}
}