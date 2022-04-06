<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
		// function __construct() {
		// 	parent::__construct();
		// 	$method=  $this->router->fetch_method();
		// 	$allowed=array('index');
		// 	if(!in_array($method,$allowed)){
		// 		$this->login_check();
		// 	}
		// }


	public function index(){
		$this->load->view('users/index');
	}

	public function about_us(){
		$this->load->view('/users/about-us');
	}

	public function product_list(){
		$this->load->view('/users/product-list');
	}

	public function cart(){
		$this->load->view('users/cart');
	}

	public function wishlist(){
		$this->load->view('users/wishlist');
	}

	public function product_details(){
		$this->load->view('users/product-details');
	}

	public function register(){
		$this->load->view('users/register');
	}

	public function login(){
		$this->load->view('users/login');
	}

	public function checkout(){
		$this->load->view('users/checkout');
	}

}
