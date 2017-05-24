<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_pedidos extends CI_model {

	public function getAllPedidos() {

		$this->db->order_by("dataHora desc");
                $this->db->from("pedido");
		return $this->db->get();
		
	}
        
        public function getAllPedidoItens($idPedido = null) {
            
        	$this->db->where("idPedido", $idPedido);
                $this->db->from("pedidoitens pi");
                $this->db->join('produtos pr', 'pr.idProduto = pi.idProduto');
		return $this->db->get();
		
	}

}