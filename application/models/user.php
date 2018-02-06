<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Model
{


//        $user = $this->session->userdata('id');
//        $query = $this->db
//            ->select('id')
//            ->select('username')
//            ->from('user')
//            ->where('id', $user)
//            ->get();
//
//        return $query->result();

//        public function user()
//    {
//
//        $this->db->select("*");
////        $query = $this->db->get('user');
////        return $query->result();
//            $this->db->from("user");
//            $query = $this->db->get();
//            return $query->result();
//
//    }

    public function users()
    {
        $query = $this->db
            ->select('id')
            ->select('username')
            ->from('user')
            ->get();

        return $query->result();
    }


    public function funcname($id)
    {

        $this->db->select('*');
        $this->db->from('user a');
        $this->db->join('article b', 'b.user_id=a.id', 'left');
        $this->db->where('a.id', $id);
        $query = $this->db->get();
        return $query->result();


    }


    public function add_new($array)
    {
        // $username=$array['username'];
        //$body=$array['body'];
        //$id=$array['id'];
        //feild name and database name same than


        return $this->db->insert('user', $array);
    }
    //return  $this->db->insert('article',['title'=>$title,'body'=>$body,'user_id'=>$id]);

    // public function funcname($id)
//   // {
//
//        $this->db->select('*');
//        $this->db->from('author a');
//        $this->db->join('book b', 'b.Author_id=a.Author_id', 'left');
//        $this->db->where('a.Author_id',$id);
//        $query = $this->db->get();
//        return $query->result_array();
//
//
    //}



}
