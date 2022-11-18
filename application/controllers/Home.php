<?php
class Home extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Home_model');
	}
	public function index()
	{
		$this->load->view('login-view');
	}
	public function login()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$check_email = $this->Home_model->check_email($email);
		if (empty($check_email)) {
			$this->session->set_flashdata('email_not_registered', 'Email is Not Registered');
			redirect('Home');
		} else {
			$check = $this->Home_model->login($email, $password);
			if (!empty($check)) {
				$this->session->set_userdata('user_id', $check->user_id);
				redirect('schools');
			} else {
				$this->session->set_flashdata('login_failed', 'Invalid Username or Password');
				redirect('Home');
			}
		}
	}
	public function register()
	{
		if ($this->input->post('register')) {
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = md5($this->input->post('password'));
			$check_email = $this->Home_model->check_email($email);
			if (empty($check_email)) {
				$data = [
					'name' => $name,
					'email' => $email,
					'password' => $password
				];
				if ($this->Home_model->register($data)) {
					$this->session->set_flashdata('register_success', 'Registration Success');
					redirect(base_url(''));
				} else {
					$this->session->set_flashdata('register_not_success', 'Failed to Register');
					redirect('register');
				}
			} else {
				$this->session->set_flashdata('email_already_registered', 'Email is Already Registered');
				redirect('register');
			}
		} else {
			$this->load->view('register-view');
		}
	}
	public function get_schools()
	{
		if ($this->check_session()) {
			$user_id = $this->session->userdata('user_id');
			$data['schools'] = $this->Home_model->get_schools($user_id);
			$this->load->view('school-view', $data);
		}
	}
	public function add_school(){
		if($this->check_session()){
			if($this->input->post('add')){
				$name=$this->input->post('name');
				$location=$this->input->post('location');
				$data=[
					'user_id'=>$this->session->userdata('user_id'),
					'name'=>$name,
					'location'=>$location
				];
				if($this->Home_model->add_school($data)){
					$this->session->set_flashdata('school_added','School Added');
				}
				else{
					$this->session->set_flashdata('school_not_added','Failed to Add School');
				}
				redirect('schools');
			}
			else{
				$this->load->view('add-school-view');
			}
		}
	}
	public function edit_school($school_id){
		if($this->check_session()){
			if($this->input->post('update')){
				$name=$this->input->post('name');
				$location=$this->input->post('location');
				$data=[
					'name'=>$name,
					'location'=>$location
				];
				if($this->Home_model->update_school($school_id,$data)){
					$this->session->set_flashdata('school_updated','School Updated');
				}
				else{
					$this->session->set_flashdata('school_not_updated','Failed to Update School');
				}
				redirect('schools');
			}
			else{
				$data['school']=$this->Home_model->get_single_school($school_id);
				$this->load->view('edit-school-view',$data);
			}
		}
	}
	public function delete_school(){
		if($this->check_session()){
			$school_id=$this->input->post('school_id');
			if($this->Home_model->delete_school($school_id)){
				$this->session->set_flashdata('school_deleted','School Deleted');
			}
			else{
				$this->session->set_flashdata('school_not_deleted','Failed to Delete School');
			}
			redirect('schools');
		}
	}
	public function check_session()
	{
		if ($this->session->userdata('user_id')) {
			return true;
		} else {
			redirect(base_url(''));
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect('');
	}
}
