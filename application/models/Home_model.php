<?php
class Home_model extends CI_Model{
	
	function register($data){
		$this->db->insert('user',$data);
		return $this->db->insert_id();
	}
	
	function get_last_register_id(){
		return $this->db->select('registration_id')
						->from('user')
						->order_by('user_id','DESC')
						->limit(1)
						->get()
						->result();
	}
	function get_single_user($user_id){
		return $this->db->where('user_id',$user_id)
						->get('user')
						->row();
	}
	function update_profile($user_id,$data){
		return $this->db->where('user_id',$user_id)
						->update('user',$data);
	}
}
