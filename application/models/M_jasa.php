<?php 
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class M_jasa extends CI_Model {
		
		function __construct() {
			parent::__construct();
		}
		
		function get_all_kategori() {
			$this->db->select('*');
			$this->db->from('jasa_kategori');
			$query = $this->db->get();
			
			return $query->result();
		}
	}
?>
