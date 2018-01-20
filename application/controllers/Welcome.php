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
		$this->load->view('welcome');
	}

	public function landing()
	{
		$this->load->view('v_landing');
	}

	public function beranda()
	{
		$this->load->view('v_beranda');
	}

	public function datetime()
	{
		$this->load->view('v_datetime');
	}

	public function login()
	{
		$this->load->view('v_login');
	}

	public function register()
	{
		$data['provinsi']=$this->m_wilayah->get_all_provinsi();
		$this->load->view('v_register', $data);
	}

	public function Setting()
	{
		$data['provinsi']=$this->m_wilayah->get_all_provinsi();
		$this->load->view('v_setting', $data);
	}

	public function Kategori()
	{
		$this->load->view('v_category');
	}

	public function Profil()
	{
		$this->load->view('v_profil');
	}

	public function Penyedia()
	{
		$this->load->view('v_penyedia');
	}

	public function Obrolan()
	{
		$this->load->view('v_obrolan');
	}

	public function Notifikasi()
	{
		$this->load->view('v_notifikasi');
	}

	public function Invoice()
	{
		$this->load->view('v_invoice');
	}

	public function Review()
	{
		$this->load->view('v_review');
	}

	public function Reqin()
	{
		$this->load->view('v_reqin');
	}

	public function Reqout()
	{
		$this->load->view('v_reqout');
	}
}
