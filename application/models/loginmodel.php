<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model{

public function verifylogin($username, $password)
{
$q=$this->db->where(['username'=>$username,'password'=>$password])
            ->get('user');

            if($q->num_rows())
            {
            	//print_r($q->result());
            return $q->row()->id;
            }


        else
        {
        	return false;
        }
}


}

