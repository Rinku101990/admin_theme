<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products extends CI_Controller {
	public function index()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/products');
		$this->load->view('milky-admin/includes/footer');
	}
	public function addProduct()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/addProduct');
		$this->load->view('milky-admin/includes/footer');
	}
	public function editProduct()
	{   
		$this->load->view('milky-admin/includes/header');
		$this->load->view('milky-admin/includes/top-header');
		$this->load->view('milky-admin/includes/sidebar');
		$this->load->view('milky-admin/editProduct');
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