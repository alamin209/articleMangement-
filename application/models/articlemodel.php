<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Articlemodel extends CI_Model{

	public function article()
	{
		$user=$this->session->userdata('id');
        $query=$this->db
                ->select('title')
                ->select('id')
                ->from('article')
                 ->where('user_id',$user)
                 ->get();
           
        return $query->result();
	}



	public function add_new($array)
	{
        $title=$array['title'];
        $body=$array['body'];
        $id=$array['id'];
        //feild name and database name same than
        //return $this->db->insert(aericlacl,array);
        return  $this->db->insert('article',['title'=>$title,'body'=>$body,'user_id'=>$id]);

	}


    public function find_article($find_article)
    {
        $find=$this->db->select(['id','title','body'])
                    ->where('id',$find_article)
                    ->get('article');
        return  $find->result();
    }

    public function  update_article($id,$data)
    {

        $this->db->where('id',$id);
        $this->db->update('article',$data);

    }


    public function delete_articel($delete_article)
    {
        $find=$this->db->select(['id','title','body'])
            ->where('id',$delete_article)
            ->get('article');
        return  $find->result();
    }




    public function delete_id($id)
    {
        $this->db->where('id',$id);
        $this->db->delete('article');
    }








}