<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Book_model','books');
  }

  function index()
  {
    $dados = [
      'title' => "Meus Livros",
      'part' =>  "index",
      'books' => $this->books->index()
    ];
    $this->load->view('layout',$dados);
  }
  public function view()
  {
    $dados = [
      'title' => 'Detalhes',
      'part' =>  'view',
      'book' => $this->books->find_by_id($this->uri->segment(3))?$this->books->find_by_id($this->uri->segment(3)) :redirect('book')
    ];
    $this->load->view('layout',$dados);
  }
  public function add(){
    $dados = [
      'title' => 'Adicionar',
      'part' =>  'add',
    ];
    if($this->input->post()){
      $data = elements(['name','author','resume','isbn','purchase_point','price','publishing_house','date_buy'],$this->input->post());
      if ($this->notBlank($data) == TRUE){
        $this->books->save($data);
        $this->session->set_flashdata('infor','Livro adicionado ao acervo com sucesso !');
        redirect('book');
      }else{
        $this->session->set_flashdata('infor','Todos os campos são de preenchimento obrigatório');
        redirect('book/add');
      }
    }
    $this->load->view('layout',$dados);
  }

  public function edit(){
    $dados = [
      'title' => 'Editar',
      'part' =>  'edit',
      'book' => $this->books->find_by_id($this->uri->segment(3))?$this->books->find_by_id($this->uri->segment(3)) :redirect('book')
    ];
    if($this->input->post()){
        $data = elements(['id','name','author','resume','isbn','purchase_point','price','publishing_house','date_buy'],$this->input->post());
        if ($this->notBlank($data) == TRUE){
          $this->books->save($data);
          $this->session->set_flashdata('infor','Livro alterado  com sucesso !');
          redirect('book');
        }else{
          $this->session->set_flashdata('infor','Todos os campos são de preenchimento obrigatório');
          redirect("book/edit/{$this->uri->segment(3)}");
        }
    }
        $this->load->view('layout',$dados);
  }
  public function delete($id)
  {
      $id = $this->uri->segment(3);
      if(!empty($id)){
          $this->books->delete($id);
          $this->session->set_flashdata('infor','Apagado com sucesso');
          redirect("book");
      }else{
          $this->session->set_flashdata('infor','Algo deu errado ao tentar apagar !');
          redirect("book");
      }
  }
  private function notBlank($checks)
  {
    foreach ($checks as $check) {
      if ( empty($check) && $check !== '0' && $check !== 0){
        $blank = true;
      }
    }
    return $blank ? false: true;
  }
}
