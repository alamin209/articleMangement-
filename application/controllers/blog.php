<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

public function index()
{
	$this->load->model("auth",'a');
	$data['user']=$this->a->test();

	$this->load->view('blog_index',$data);
}


public function test()
{

	echo "Hello world";
}


}