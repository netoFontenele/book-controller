<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();

  }
  function  index(){
    $query = $this->db->get('books');
    return $query->result_array();
  }

}