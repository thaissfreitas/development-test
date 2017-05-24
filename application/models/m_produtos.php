<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_produtos extends CI_model {

	
	public function getProdutos($idProduto = null) {
			
		if ($idProduto != null) {
			$this->db->where("idProduto", $idProduto);
		}
		
		return $this->db->get("produtos");
		
	}
}