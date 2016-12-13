<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if ( ! function_exists('load_content_view'))
{
  function load_content_view($view){
    $CI =& get_instance();
    return $CI->load->view($CI->router->class.'/'.$view);
  }
}
