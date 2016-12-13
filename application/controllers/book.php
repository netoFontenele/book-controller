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

  }
  public function add(){
    $dados = [
      'title' => "Adicionar",
      'part' =>  "add"
    ];
    
    $this->load->view('layout',$dados);
  }
  public function edit($id = null){

  }
  public function delete($id)
  {

  }
}
