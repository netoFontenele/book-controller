<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  function  index(){
    return $this->db->get('books')->result_object();
  }
  function  find_by_id($id){
    $this->db->where('id',$id);
    return $this->db->get('books')->result_object();
  }
  function save($data){
    if(array_key_exists('id',$data)){
      $this->db->where('id',$data['id']);
      $this->db->update('books',$data);
    }else{
        $this->db->insert('books', $data);
    }
  }
  function delete($id){
    $this->db->where('id',$id);
    $this->db->delete('books');
  }
}
