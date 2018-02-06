<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{


	public function index()
	{
		$this->load->view("user/aeticle_list");
	}


	public function  registation1 ()
    {
        $post = $this->input->post();
        $this->load->model('articlemodel');
        if ($this->articlemodel->add_new($post)) {

            $this->session->set_flashdata('feedback', 'sucessfully add ');
            $this->session->set_flashdata('feedback_class', "alert-success");
        } else {
            $this->session->set_flashdata('feedback', 'article did not added');
            $this->session->set_flashdata('feedback_class', "alert-danger");
            //echo "fail";
        }

        return redirect('admin/dasbord', 'refresh');

    }

}


