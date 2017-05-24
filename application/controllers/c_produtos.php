<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class C_produtos extends CI_Controller {
 

	public function index()
	{
            $this->load->model("m_produtos", "produtos");
            $dados['produtos'] = $this->produtos->getProdutos();
            $this->load->view('v_produtos', $dados);
	}
        
        
        
        public function create()                
	{
       
            $this->load->model("m_produtos", "produtos");
            $this->load->view('v_add_produtos');
	}
        
        public function edit($idProduto)                
	{
            $this->load->model("m_produtos", "produtos");
            $dados['produtos'] = $this->produtos->getProdutos($idProduto);
            $this->load->view('v_edit_produtos', $dados);
	}
        
        public function addProduto(){
            $data['descricao']  = $this->input->post('descricao'); 
            $data['preco']        = $this->input->post('preco');
            $data['quantEstoque']    = $this->input->post('quantEstoque');
          
            $this->db->insert('produtos', $data);
            $idProduto = mysql_insert_id();
            redirect("http://localhost/development-test/index.php/c_produtos");	
        }
        
         public function editProduto(){
            $data['descricao']  = $this->input->post('descricao'); 
            $data['preco']        = $this->input->post('preco');
            $data['quantEstoque']    = $this->input->post('quantEstoque');
            $data['idProduto']    = $this->input->post('idProduto');

            $this->db->where('idProduto', $data['idProduto']);
            $this->db->update('produtos', $data);
            redirect("http://localhost/development-test/index.php/c_produtos");	
        }
}