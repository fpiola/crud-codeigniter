<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Produto_model extends CI_Model {

    function __construct(){
        parent::__construct();
        //Carregar o autoload de conexão com o banco de dados
        $this->load->database();
    }

    //CRUD PRODUTO
    
    //Listar o banco de dados com relacionamento entre tabelas
    function listarTodos($id){
        $query_str = "SELECT categoria.id_categoria, categoria.categoria, produto.id_produto, produto.produto, produto.descricao, produto.quantidade, produto.preco
        FROM produto INNER JOIN categoria
        ON categoria.id_categoria = produto.categoriacorrespondente
        WHERE produto.produto LIKE '%$id%' ";
        $query = $this->db->query($query_str);
        return $query->result();
    }

    function listar($id){
        $query_srt = "SELECT * FROM produto WHERE produto LIKE '%$id%'";
        $query = $this->db->query($query_srt);
        return $query->result();
    }

    function cadastrar($produto){
        return $this->db->insert('produto', $produto);
    }

    function listarEditar($id){
        $query_str = "SELECT * FROM produto WHERE id_produto = $id";
        $query = $this->db->query($query_str);
        return $query->result();
    }

    function editar($produto){
        $this->db->where('id_produto', $produto['id_produto']);
        $this->db->set($produto);
        return $this->db->update('produto');
    }

    function deletar($id){
        $this->db->delete('produto', array('id_produto' => $id));
    }

    //CRUD CATEGORIA

    function listarCategoria(){
        $query = $this->db->get('categoria');
        return $query->result();
    }

    function cadastrar_categoria($categoria){
        return $this->db->insert('categoria', $categoria);
    }

    function listarEditarCategoria($id){
        $query_str = "SELECT * FROM categoria WHERE id_categoria = $id";
        $query = $this->db->query($query_str);
        return $query->result();
    }

    function editar_envia($categoria){
        $this->db->where('id_categoria', $categoria['id_categoria']);
        $this->db->set($categoria);
        return $this->db->update('categoria');
    }

    function deletar_categoria($id){
        $this->db->delete('categoria', array('id_categoria' => $id));
    }
    
}