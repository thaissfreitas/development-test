<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_pedidos extends CI_Controller {
 

	public function index()
	{
            $this->load->model("m_pedidos", "pedidos");
            $dados['pedidos'] = $this->pedidos->getAllPedidos();
            $this->load->view('v_pedidos', $dados);
	}
        
        
	public function itens($idPedido)
	{
            $this->load->model("m_pedidos", "pedidoitens");
            $dados['itens'] = $this->pedidoitens->getAllPedidoItens($idPedido);
            $this->load->view('v_pedidoitens', $dados);
	}
        
        public function create(){
            
            $limit = mt_rand(1,10);
            $this->db->where("quantEstoque > ", " 0 ");
            $this->db->order_by('rand()');
            $this->db->limit($limit);
            $dados = $this->db->get("produtos");
            
            $data['dataHora'] = date("Y-m-d H:i:s");
            $this->db->insert('pedido', $data);
            $idPedido = mysql_insert_id();
            
            $precoProds = 0;
            foreach ($dados->result() as $itens){
               $precoProds = $precoProds + $itens->preco;
               
               $dadosItens['idPedido'] = $idPedido;
               $dadosItens['idProduto'] = $itens->idProduto;
               $dadosItens['valor'] = $itens->preco;
               
               $this->db->insert('pedidoitens', $dadosItens);

               $quantEstoque = $itens->quantEstoque - 1;              
               $dadosUpdate['idProduto'] =  $itens->idProduto;
               $dadosUpdate['quantEstoque'] =  $quantEstoque;

               $this->db->where('idProduto', $dadosUpdate['idProduto']);
               $this->db->update('produtos', $dadosUpdate);
            }
            
            $updatePedido['valorTotalPedido'] = $precoProds;
            $updatePedido['idPedido'] = $idPedido;

            $this->db->where('idPedido', $idPedido);
            $this->db->update('pedido', $updatePedido);
            
            redirect("http://localhost/development-test/index.php/c_pedidos");	
        }
}