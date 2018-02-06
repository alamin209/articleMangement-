<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Registation extends CI_Controller{


    public function __construct()
    {
        parent::__construct();

        $this->load->model('user');

    }




  public function add_new_user()
  {

    $this->load->view('user/registation');


  }



}