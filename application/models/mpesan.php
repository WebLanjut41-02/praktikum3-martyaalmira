<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class mpesan extends CI_Model{

 	public function menu(){
 		$this->db->select('*');
 		$this->db->form('menu');
 		$query = $this->db->get();
 		return $query->result();
 	}

 	public function pelanggan(){
 		$data = array(
 			'nama' => $this->input);
 		$this->db->insert('pemesan', $data);
 	}
 }

?>