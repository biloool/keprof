<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$this->load->view('partial/nav_guest');
		$this->load->view('pages/home');
		$this->load->view('partial/footer');
	}
	public function login()
	{
		$this->load->view('pages/login');
	}
	public function admin()
	{
		$this->load->view('admin/navbar');
		$this->load->view('admin/home_admin');
	}
	public function data_anak()
	{
		$this->load->view('partial/nav_guest');
		$this->load->view('pages/data_anak');
	}
	public function program()
	{
		$this->load->view('partial/nav_guest');
		$this->load->view('pages/program');
		$this->load->view('partial/footer');
	}
	public function profil()
	{
		$this->load->view('partial/nav_guest');
		$this->load->view('pages/profil');
	}
}
