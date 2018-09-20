<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Promotions extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/promotionBanner');
		$this->load->view('milky-admin/includes/footer');
	}
	public function coupons()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/coupons');
		$this->load->view('milky-admin/includes/footer');
	}
	public function addCoupon()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/addCoupon');
		$this->load->view('milky-admin/includes/footer');
	}
	public function newsletters()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/newsletters');
		$this->load->view('milky-admin/includes/footer');
	}
	
	
}