<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produtos extends CI_Controller {

    function __construct(){
        parent::__construct();

        //Carregar o autoload do model
        $this->load->model('Produto_model');

        //Carregar o autoload de sessão
        $this->load->library('session');

        //Carregar o autoload para validação
        $this->load->library('form_validation');
    }

	public function index(){
        //Model de listar produtos
        $id = $this->input->get('id');
        $dados['produto'] = $this->Produto_model->listar($id); 
        $this->load->view("produtos", $dados);
    }

    //CRUD DE PRODUTOS

    function listar_produtos(){
        $id = $this->input->get('id');
        $dados['produto'] = $this->Produto_model->listarTodos($id); 
        $this->load->view("listar_produtos",$dados);
    }

    function novo_produto(){
        //Listar categoria do banco de dados
        $dados['listarCategoria'] = $this->Produto_model->listarCategoria(); 
        $this->load->view("novo_produto", $dados);
    }


    public function cadastrar(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('produto', 'produto', 
        'required');

        $produto = array(
            "produto" => $this->input->post("produto"),
            "descricao" => $this->input->post("descricao"),
            "quantidade" => $this->input->post("quantidade"),
            "preco" => $this->input->post("preco"),
            "categoriacorrespondente" => $this->input->post("categoriacorrespondente")
        );

        $sucesso = $this->form_validation->run();

        if($sucesso) {
            $this->Produto_model->cadastrar($produto);
            $this->session->set_flashdata('success', 'Produto cadastrado com sucesso!');
            redirect('produtos');
        }else{
            redirect('produtos/novo_produto/');
        }

    }

    function editar_produto($id){
        $dados["produto"] = $this->Produto_model->listarEditar($id);
        //Listar categoria do banco de dados
        $dados['listarCategoria'] = $this->Produto_model->listarCategoria();
        $this->load->view("editar_produto", $dados);
    }

    function editar(){
        $produto = array(
            "id_produto" => $this->input->post("id_produto"),
            "produto" => $this->input->post("produto"),
            "descricao" => $this->input->post("descricao"),
            "quantidade" => $this->input->post("quantidade"),
            "preco" => $this->input->post("preco"),
            "categoriacorrespondente" => $this->input->post("categoriacorrespondente")
        );

        $this->Produto_model->editar($produto);
        $this->session->set_flashdata('success', 'Produto Editado com sucesso!');
        redirect('produtos');
    }

    function deletar($id){
        $this->Produto_model->deletar($id);
        $this->session->set_flashdata('success', 'Produto deletado com sucesso!');
        redirect('produtos');
    }

    //CRUD DE CATEGORIAS

    function nova_categoria(){
        //Model de listar produtos
        $categoria['categoria'] = $this->Produto_model->listarCategoria(); 
        $this->load->view("nova_categoria", $categoria);
    }

    function cadastrar_categoria(){
        $categoria = array(
            "categoria" => $this->input->post("categoria")
        );
        $this->Produto_model->cadastrar_categoria($categoria);
        $this->session->set_flashdata('success', 'Categoria cadastrada com sucesso!');
        redirect('produtos/nova_categoria/');
    }

    function editar_categoria($id){
        $dados["categoria"] = $this->Produto_model->listarEditarCategoria($id);
        $this->load->view("editar_categoria", $dados);
    }

    function editar_envia(){
        $categoria = array(
            "id_categoria" => $this->input->post("id_categoria"),
            "categoria" => $this->input->post("categoria")
        );
        $this->Produto_model->editar_envia($categoria);
        $this->session->set_flashdata('success', 'Categoria Editada com sucesso!');
        redirect('produtos/nova_categoria/');
    }

    function deletar_categoria($id){
        $this->Produto_model->deletar_categoria($id);
        $this->session->set_flashdata('success', 'Categoria deletada com sucesso!');
        redirect('produtos/nova_categoria/');
    }
    
}
