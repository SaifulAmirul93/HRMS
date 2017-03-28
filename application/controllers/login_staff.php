<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_staff extends CI_Controller {
	function index (){
		 $data['main_content'] ='loginStaff_form';
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

	    	 $this->load->model('m_loginStaff');
	    	 $data = $this->m_loginStaff->login($email,$pass);
	    	
	    	 if ($data) 
	    	 {
	    	 	/*echo "login Success";*/
	    	 /*	$array = array(
	    	 		'user_id' => $this->my_func->nastyHRMS_encrypt($data->user_id),
	    	 		'user_name' => $this->my_func->nastyHRMS_encrypt($data->user_name)
	    	 	);	  */  		
	    	 	//$this->session->set_userdata( $array );
	    		redirect(base_url('index.php'),'refresh');
	    	 }
	    	 else
	    	 {
	    	 	echo "Login Not Success";
	    	 	redirect(site_url('loginStaff_form'),'refresh');
	    	 }
	    	//$temp = $this->m_login->get();
	    	/*echo "<pre>";
	    	print_r($data);
	    	echo "</pre>";*/
	   }

	    function signup()
	    {
	    	$email = $this->input->post("email");
	        $pass = $this->input->post("pass");

	        $this->load->library("my_func");
	        $pass = $this->my_func->nastyHRMS_encrypt($pass);

	        //echo $email;
	        //echo $pass;

	        $this->load->model("m_loginStaff");

	        $data = array(
	        	"staff_email" => $email , 
	        	"staff_password" => $pass
	        );
	        if (!$this->m_login->insert($data)) {
	        	echo "Not success";
	        }else{
	        	echo "success";
	        }
	    }
	}

