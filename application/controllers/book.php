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
      'book' => $this->books->view($this->uri->segment(3))
    ];
    $this->load->view('layout',$dados);
  }
  public function add(){
    $dados = [
      'title' => 'Adicionar',
      'part' =>  'add',
    ];
    $this->form_validation->set_rules('name', 'Livro', 'required');
    if($this->form_validation->run() == TRUE){
        $data = elements(['name','author','resume','isbn','purchase_point','price','publishing_house','date_buy'],$this->input->post());
        $this->books->save($data);
        $this->session->set_flashdata('infor','Livro adicionado ao acervo com sucesso !');
        redirect('book');
    }
    $this->load->view('layout',$dados);
  }

  public function edit($id = null){

  }
  public function delete($id)
  {

  }
}
