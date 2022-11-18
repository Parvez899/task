<?php
class Home_model extends CI_Model{
	function check_email($email){
		return $this->db->where('email',$email)
						->get('user')
						->row();
	}
	function login($email,$password){
		return $this->db->where('email',$email)
						->where('password',$password)
						->get('user')
						->row();
	}
	function register($data){
		return $this->db->insert('user',$data);
	}
	function get_schools($user_id){
		return $this->db->where('user_id',$user_id)
						->order_by('school_id','DESC')
						->get('school')
						->result();
	}
	function add_school($data){
		return $this->db->insert('school',$data);
	}
	function get_single_school($school_id){
		return $this->db->where('school_id',$school_id)
						->get('school')
						->row();
	}
	function update_school($school_id,$data){
		return $this->db->where('school_id',$school_id)
						->update('school',$data);
	}
	function delete_school($school_id){
		return $this->db->where('school_id',$school_id)
						->delete('school');
	}
}
