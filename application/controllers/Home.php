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
		$i=1;
		$id=$this->Home_model->get_last_register_id();
		if($id){
			$last_code=$id[0]->registration_id;
			$increment = $i++;
			$data['registration_id'] = 'FT8908-' . str_pad($increment + substr($last_code, 7), 2, '0', STR_PAD_LEFT);
		}
		else{
            $data['registration_id'] = 'FT8908-01';
        }
		$this->load->view('register-view',$data);
	}
	public function register()
	{
		$registration_id = $this->input->post('registration_id');
		$username=$this->input->post('username');
		$fname=$this->input->post('fname');
		$lname=$this->input->post('lname');
		$data=[
			'registration_id'=>$registration_id,
			'username'=>$username,	
			'first_name'=>$fname,
			'last_name'=>$lname,
		];
		$last_inserted_id=$this->Home_model->register($data);
		if($last_inserted_id){
			$get_user=$this->Home_model->get_single_user($last_inserted_id);
			$folder_name='./assets/profile/'.$get_user->registration_id;
			if(!is_dir($folder_name)){
				mkdir($folder_name,0775,true);
				if(is_dir($folder_name)){
					$config['upload_path']=$folder_name.'/';
					$config['allowed_types']='jpeg|jpg|png';
					$config['overwrite']=FALSE;
					$this->upload->initialize($config);
					$this->upload->do_upload('photo');
					$image_data=$this->upload->data();
					$image=[
						'photo'=>$image_data['file_name'] ? 'assets/profile/'.$get_user->registration_id.'/'.$image_data['file_name'] : ''
					];
					$this->Home_model->update_profile($last_inserted_id,$image);
				}
			}
			$this->response['status']=true;
			$this->response['message']='Registration Successfull';
			$this->response['user_id']=$last_inserted_id;
			print_r(json_encode($this->response));
			return false;
		}
		else{
			$this->response['status']=false;
			$this->response['message']='Failed to Register';
			print_r(json_encode($this->response));
			return false;
		}
		
	}
	public function get_profile($user_id){
		$data['user']=$this->Home_model->get_single_user($user_id);
		$this->load->view('profile-view',$data);
	}
	
}
