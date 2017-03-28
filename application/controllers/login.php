<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function index (){
		 $data['main_content'] ='login_form';
		 //$this->load->view('nastyHRMS/example/login', $data);
		 $this->load->view('include/templete', $data);
	}

	function __construct(){
		parent::__construct();
		$this->load->library('session', 'my_func');
	}
	//sql injection alert ***
	    function signin()
	    {
	    	 //$this->load->library("encrypt");
	    	 $email = $this->input->post('email');
	    	 $pass = $this->input->post('pass');

	    	 $this->load->model('m_login');
	    	 $data = $this->m_login->login($email,$pass);
	    	
	    	 if ($data) 
	    	 {
	    	 	/*echo "login Success";*/
	    	 /*	$array = array(
	    	 		'user_id' => $this->my_func->nastyHRMS_encrypt($data->user_id),
	    	 		'user_name' => $this->my_func->nastyHRMS_encrypt($data->user_name)
	    	 	);	  */  		
	    	 	//$this->session->set_userdata( $array );
	    	 	echo "<script>alert('Login Success!!');</script>";
	    		redirect(base_url('dashboard/page/a1'),'refresh');
	    	 }
	    	 else
	    	 {
	    	 	// echo "Login Not Success";
	    	 	echo "<script>alert('Login Not Success!!');</script>";
	    	 	redirect(site_url('login'),'refresh');
	    	 }
	    	//$temp = $this->m_login->get();
	    	/*echo "<pre>";
	    	print_r($data);
	    	echo "</pre>";*/
	   }


	   public function page($key){
	    	switch ($key) {
	    		case 'b1':

	    			// $this->load->view('include/templete', $data);

	    			$this->load->view('register.php');
	    	default:
    		//$this->_show();
    		break;

	    	}
	    }

	    function signup()
	    {
	    	 if ($this->input->post()) {
                $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

                $this->load->database();
                $this->load->model('m_register');
                //$this->load->library('my_func');
                /*foreach ($arr as $key => $value) {
                    if ($value != null) {
                        if ($key == 'pass') {
                            $value = $this->my_func->scpro_encrypt($value);
                        }
                        $arr2['us_'.$key] = $value;                     
                    }
                }*/
               foreach ($arr as $key=>$value){
                if($value != null){
                    $arr2[$key]=$value;
                }

                }
                $result = $this->m_register->insert($arr2,$id);  
                redirect(site_url('login/page/b1'),'refresh');
            }else{
                redirect(site_url('login/page/b1'),'refresh');
            }


/*
	    	 $email = $this->input->post('user_email');
	    	 $pass = $this->input->post('user_password');
	    	 $user_name = $this->input->post('user_name');


	    	 $this->load->model('m_register');
	    	 $data = $this->m_register->login($email,$pass,$user_name);
	    	
	    	 if ($data) 
	    	 {*/
	    	 	/*echo "login Success";*/
	    	 /*	$array = array(
	    	 		'user_id' => $this->my_func->nastyHRMS_encrypt($data->user_id),
	    	 		'user_name' => $this->my_func->nastyHRMS_encrypt($data->user_name)
	    	 	);	  */  		
	    	 	//$this->session->set_userdata( $array );
	    		/*redirect(base_url('login'),'refresh');
	    	 }
	    	 else
	    	 {
	    	 	echo "Register Not Success";
	    	 	redirect(site_url('login/page/b1'),'refresh');
	    	 }*/
	    }


	}

