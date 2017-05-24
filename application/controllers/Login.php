<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {

        // VALIDATION RULES
        $this->load->library('form_validation');
        $this->form_validation->set_rules('usuario', 'Usuário', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');
        $this->form_validation->set_error_delimiters('<p class="error">', '</p>');


        // MODELO MEMBERSHIP
        $this->load->model('Usuario_model', 'usuario');
        $query = $this->membership->validate();

        if ($this->form_validation->run() == FALSE) {

            $this->load->view('login/login_view');
        } else {

            if ($query) { // VERIFICA LOGIN E SENHA
                $data = array(
                    'usuario' => $this->input->post('usuario'),
                    'logged' => true
                );
                $this->session->set_userdata($data);
                redirect('login/area_restrita');
            } else {
                redirect($this->index());
            }
        }
    }
}