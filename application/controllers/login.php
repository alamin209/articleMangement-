<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller{


	public function index()
	{
		if($this->session->userdata('id'))
			redirect('admin/dasbord');
		$this->load->view("user/admin_login");
	}
// public function __construct()
// {
// 	 parent::__construct();
// 	  $this->session->userdata('id');
		
// }



	public function admin_login()
	{
		 $this->load->library('form_validation');
		 $this->form_validation->set_rules('username', 'Username', 'trim|required');
$this->form_validation->set_rules('password', 'Password', 'trim|required');

	// $this->form_validation->set_rules('username','User Name','required');
	// $this->form_validation->set_rules('password','Password','required');

	if ($this->form_validation->run() ) {
     $username=$this->input->post('username');
     $password=$this->input->post('password');
      $this->load->model('loginmodel');
      $login=$this->loginmodel->verifylogin($username,$password);
     if ($login) {
     	$this->session->set_userdata('id',$login);
//$this->load->view("admin/dashbord");

 return redirect('admin/dasbord','refresh');
     }
 else
 {
 	$this->session->set_flashdata('login_fail',"invalid user ?Is it a joke");
redirect('login','refresh');

 }
     // echo $username."<br>";
     // echo $password;
		//echo "this is good at valiadition";
	}
	

else
{
	$this->load->view("user/admin_login");
	
}


}




public function logout()
{
$this->session->unset_userdata('id');
redirect('login','refresh');
}
public  function  registation()
{
    $this->load->view('user/registation');

}



    public  function  registation1()
    {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username ditey hobey ', 'trim|required');
        $this->form_validation->set_rules('password', 'Password na delay jatey dibo na', 'trim|required');
        $this->form_validation->set_rules('fname', 'firstname is detay hobey  ', 'trim|required');
        $this->form_validation->set_rules('lname', 'plz give it ', 'trim|required');


        // $this->form_validation->set_rules('username','User Name','required');
        // $this->form_validation->set_rules('password','Password','required');

        if ($this->form_validation->run()) {

            $post = $post = $this->input->post();

            // print_r($post);
            unset($post['submit']);
            $this->load->model('user');
            if ($this->user->add_new($post)) {

               // echo "sucess";
                //$this->session->set_flashdata('feedback', 'sucessfully add ');
                //$this->session->set_flashdata('feedback_class', "alert-success");
                //} //else {
                //$this->session->set_flashdata('feedback', 'article did not added');
                //$this->session->set_flashdata('feedback_class', "alert-danger");
                //  echo "fail";

                return redirect('admin/dasbord', 'refresh');
            }
            else {
                echo "do not addd";
            }
        }

    else {
        //echo validation_errors();
        $this->load->view('user/registation');

    }

    }

    }
