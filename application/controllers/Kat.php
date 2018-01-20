<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class Kat extends CI_Controller {

		function __construct() {
			parent::__construct();
		}

		function index() {
			$data['kategori']=$this->m_jasa->get_all_kategori();
			$this->load->view('v_kat', $data);
		}
		
		function add_ajax_jasa($id_kategori){
		    $query = $this->db->get_where('jasa_tipe',array('id_kategori'=>$id_kategori));
		    $data = "<option value=''>- Select Jasa -</option>";
		    foreach ($query->result() as $value) {
		        $data .= "<option value='".$value->id."'>".$value->nama."</option>";
		    }
		    echo $data;
		}
	}
?>