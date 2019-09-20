<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function insert($_d)
    {
        if ($this->db->where(array('btcaddress' => $_d['btcaddress']))->get('users')->result_id->num_rows==0 && $this->db->insert('users', $_d)) {
            return $this->db->insert_id();
        }
        return false;
    }

    public function update($_w, $_d){
        return $this->db->where($_w)->update('users', $_d);
    }

    public function get($_w){
        return $this->db->where($_w)->get('users')->result_array()[0]??false;
    }

    public function get_investiment($user_id){
        $a =  $this->db->select('sum(amount) a')->where(array(
            'user_id'=>$user_id,
            'invested_at >'=>date('Y-m-d H:i:s', time()-(86400*50))
            ))->get('investiments')->result()[0]->a;
        return $a?$a:0;
    }
}
