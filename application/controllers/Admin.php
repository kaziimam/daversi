<?php 
	class Admin extends MY_Controller{
		function __construct() {
			parent::__construct();
			$method =  $this->router->fetch_method();
			$allowed = array('index');
			if(!in_array($method,$allowed)){
				$this->login_check();
			}
		}

		public function login_check(){
			if (!$this->session->userdata('user') || !$this->session->userdata('id')) {
				return redirect(base_url('admin'));
			}
			if ($this->session->userdata('user') == "Admin") {
				$is_admin = 1;
			}elseif ($this->session->userdata('user') == "User") {
				$is_admin = 0;
			}
		}
		
		public function index(){
			if ($this->session->userdata('user')) {
				redirect("/admin/home");
			}else{
				$this->form_validation->set_rules('uname','User Name','required|valid_email');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
                if($this->form_validation->run()){
                    $user_name = $this->input->post('uname');
                    $password = md5($this->input->post('password'));
                    $login = $this->Admin_model->login_user($user_name, $password);
                    if($login){
                        $this->session->set_userdata('user',$login['user_type']);
                        $this->session->set_userdata('id', $login['user_id']);
                        return redirect('/admin/index');
                    }else{
                        $this->session->set_flashdata('Login_failed','Invalid Username/Password');
                        return redirect(base_url('admin'));
                    }
                }else{
                    $this->load->view("/admin/signin");
                }
			}
		}

		public function logout(){
			if($this->session->userdata('user')){
	            $this->session->unset_userdata('user');
	            $this->session->unset_userdata('id');
	            return redirect(base_url('admin'));
            }else{
                return redirect('/home/login');
            }
		}

		public function home(){
			$this->load->view("/admin/index");
		}

		public function admin_user(){
			$user_id = $this->session->userdata('id');
			$admin_user_data = $this->Admin_model->get_admin_profile($user_id);
			$data['data'] = array('user_data' => $admin_user_data);
			$this->load->view('/admin/admin_user_dashboard', $data);
		}

		public function update_admin_profile(){
			$config = ['upload_path' => './assets/images/user/', 'allowed_types' => 'gif|jpg|jpeg|png', 'height'=>'150px', 'width'=>'150px', 'remove_spaces' => true, 'encrypt_name' => true];
			$this->load->library('upload', $config);
			$this->upload->do_upload('image');


			$this->form_validation->set_rules('f_name', 'Name', 'required');
			$this->form_validation->set_value('m_number', " Mobile Number", 'required|is_unique[users.mobile_number]');
			if($this->form_validation->run()){
				$customer = array();
				$customer['name'] = $this->input->post('f_name');
				$customer['email_addr'] = $this->input->post('email');
				$customer['mobile_number'] = $this->input->post('m_number');
				if (!empty($this->upload->data()['file_name'])) {
					$customer['img'] = $this->upload->data()['file_name'];
				}
				$customer['user_type'] = $this->input->post('user_type');
				if(!empty($this->input->post('password'))){
					$customer['password'] = md5($this->input->post('password'));
				}
				$id = $this->input->post('id');
				$this->Admin_model->update_admin_profile($customer, $id);
				return redirect('/admin/home');
			}else{
				$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				$this->admin_user();
			}
		}
		
		public function users(){
			$data['data'] = array('all_user'=> $this->Admin_model->Allusers());
			$this->load->view('/admin/users/users', $data);
		}

		public function add_user(){
			$this->load->view('admin/users/add_user');
		}

		public function add_new_user(){
			$this->form_validation->set_rules('f_name', "Full Name", 'required');
			$this->form_validation->set_rules('m_number', "Mobile Number", 'required|is_unique[users.mobile_number]|numeric|min_length[10]|max_length[10]');
			$this->form_validation->set_rules('email', "Email Id", 'required|valid_email|is_unique[users.email_addr]');
			$this->form_validation->set_rules('password', "Password", 'required|alpha_numeric|min_length[5]|max_length[10]');
			$this->form_validation->set_rules('zip', "Zip Code", 'required|numeric|greater_than_equal_to[6]');

			if($this->form_validation->run()){

				$config = ['upload_path' => './assets/images/user/', 'allowed_types' => 'gif|jpg|jpeg|png', 'height'=>'150px', 'width'=>'150px', 'remove_spaces' => true, 'encrypt_name' => true];
				$this->load->library('upload', $config);

				$files = $_FILES;
				$cpt = count($_FILES['userfile']['name']);
				for($i=0; $i<$cpt; $i++){           
					$_FILES['userfile']['name']= $files['userfile']['name'][$i];
					$_FILES['userfile']['type']= $files['userfile']['type'][$i];
					$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
					$_FILES['userfile']['error']= $files['userfile']['error'][$i];
					$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
					$this->upload->do_upload('userfile');
					$dataInfo[] = $this->upload->data();
				}

				$add_user_data = array();
				$add_user_data['name'] = $this->input->post('f_name');
				$add_user_data['email_addr'] = $this->input->post('email');
				$add_user_data['mobile_number'] = $this->input->post('m_number');
				$add_user_data['user_type'] = $this->input->post('user_type');
				$add_user_data['img'] = $dataInfo[0]['file_name'];
				$add_user_data['password'] = md5($this->input->post('password'));
				$add_user_data['status'] = 1;

				if($this->input->post('user_type') == "Seller"){
					$add_user_data['license_no'] = $this->input->post('license_no');
					$add_user_data['license_img'] = $dataInfo[1]['file_name'];
					$add_user_data['id_card_img'] = $dataInfo[2]['file_name'];
				}
				
				$this->Admin_model->insert_user($add_user_data);
				$add_user_address = array();
				$add_user_address['user_id'] = $this->Admin_model->get_last_user_id()[0]['id'];
				$add_user_address['zip_code'] = $this->input->post('zip');
				$add_user_address['city'] = $this->input->post('city');
				$add_user_address['landmark'] = $this->input->post('landmark');
				$add_user_address['address'] = $this->input->post('address');

				$is_default_address = $this->Admin_model->check_address_default($this->Admin_model->get_last_user_id()[0]['id']);

				if($is_default_address > 0 ){
					$add_user_address['is_default'] = 0;
				}else{
					$add_user_address['is_default'] = 1;
				}
				$this->Admin_model->add_address($add_user_address);

				$user_address_id = array();
				$user_address_id['address'] = $this->Admin_model->get_last_address()[0]['id'];
				$this->Admin_model->update_user_address_id($this->Admin_model->get_last_user_id()[0]['id'], $user_address_id);
				return redirect('/admin/users');

			}else{
				$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
				$this->add_user();
			}
		}

		public function edit_user($id){
			$data['data'] = $this->Admin_model->getUserByIdForedit($id);
			$this->load->view('admin/users/edit_user', $data);
			
		} 

		public function edit_user_init(){

			$config = ['upload_path' => './assets/images/user/', 'allowed_types' => 'gif|jpg|jpeg|png', 'height'=>'150px', 'width'=>'150px', 'remove_spaces' => true, 'encrypt_name' => true];
			$this->load->library('upload', $config);

			$files = $_FILES;
			$cpt = count($_FILES['userfile']['name']);
			for($i=0; $i<$cpt; $i++){           
				$_FILES['userfile']['name']= $files['userfile']['name'][$i];
				$_FILES['userfile']['type']= $files['userfile']['type'][$i];
				$_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
				$_FILES['userfile']['error']= $files['userfile']['error'][$i];
				$_FILES['userfile']['size']= $files['userfile']['size'][$i];    
				$this->upload->do_upload('userfile');
				$dataInfo[] = $this->upload->data();
			}

			$add_user_data = array();
			$add_user_data['name'] = $this->input->post('f_name');
			$add_user_data['email_addr'] = $this->input->post('email');
			$add_user_data['mobile_number'] = $this->input->post('m_number');
			$add_user_data['user_type'] = $this->input->post('user_type');
			if(!empty($dataInfo[0]['file_name'])){
				$add_user_data['img'] = $dataInfo[0]['file_name'];
			}
			
			$add_user_data['password'] = md5($this->input->post('password'));
			$add_user_data['id'] = $this->input->post('id');

			if($this->input->post('user_type') == "Seller"){
				$add_user_data['license_no'] = $this->input->post('license_no');
				$add_user_data['license_img'] = $dataInfo[1]['file_name'];
				$add_user_data['id_card_img'] = $dataInfo[2]['file_name'];
			}
			$this->Admin_model->doUpdateUser($add_user_data, $this->input->post('id'));
			return redirect('/admin/users');
		} 

		public function delete_user($id){
			$this->Admin_model->delete_user($id);
			return redirect('/admin/users'); 
		}

		public function place(){
			$data['data'] = array('places' => $this->Admin_model->get_all_seller());
			$this->load->view('admin/place', $data);
		}

		public function disableUser($id){
			$data['status'] = '0';
			$this->Admin_model->disableUser($id, $data);
			return redirect('/admin/place');
		}

		public function activeUser($id){
			$data['status'] = '1';
			$this->Admin_model->activeUser($id, $data);
			return redirect('/admin/place');
		}


	}
 ?>