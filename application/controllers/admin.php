<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('id')) {
            return redirect('login');

        }
    }

    public function dasbord()
    {
        $this->load->model("articlemodel", 'article', true);
        $article['article'] = $this->article->article();
        $this->load->view('admin/dashbord', $article);

    }

    public function users()
    {
        $this->load->model("user");
        $user['users']= $this->user->users();
        //print_r($user);
        $this->load->view('user/aeticle_list', $user);

    }



    public function add_article()
    {
        $this->load->view("admin/article_add");
    }

    public function store_article()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('body', 'Body', 'required');


        if ($this->form_validation->run()) {
            //$title=$this->input->post('title');
            $post = $this->input->post();
            //print_r($post);

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

        } else {
            $this->load->view('admin/article_add');

        }

    }


    public function find_article($article)
    {
        $this->load->model("articlemodel");
        $article = $this->articlemodel->find_article($article);
        $data['article'] = $article;
        //print_r($article);
        $this->load->view('admin/update_articel', $data);

    }


    public function update_article()
    {
        $id = $this->input->post('id');

        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')

        );

        $this->load->model('articlemodel');
        $this->articlemodel->update_article($id, $data);
        // print_r($id);
        // print_r($data);
        return redirect('admin/dasbord');
        //$this->load->view('admin/dashbord');
        //$this->load->view('admin/update');
    }

    public function delete_article($id1)

    {
        //print_r($areticle);
        $this->load->model("articlemodel");
        $data['article'] = $this->articlemodel-> delete_articel($id1);

        //print_r($id1);
      // $this->load->view('admin/delete_articel',$data);
        $this->load->view('admin/delete_article', $data);
    }


    function confirm_delete($id)
    {
        $this->load->model("articlemodel");
        $this->articlemodel->delete_id($id);
        return redirect('admin/dasbord');
    }


    public function article_view()
    {
        $id = $this->input->post('username');
        $this->load->model('user');
        $this->data['edit'] = $this->user->funcname($id);
        $this->load->view('user/user_data',$this->data);

    }



}