<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller 
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 var $version="nastyHRMS Alpha";
	 
	 function __construct() 
	{
	     parent::__construct();
	}
	 
	 
	public function index()
	{
		//$this->load->view('nastyHRMS/navigation');
		//$this->load->view('nastyHRMS/header');
		
		$this->load->view('login_form');
	}

  public function info()
  {
    $this->load->view('nastyHRMS/navigation');
    $this->load->view('nastyHRMS/header');

    $this->load->view('about');
  }

  

	public function page($key)
    {
    	switch ($key) 
    	{
          case 'a1':
        	//view dashboard
              $this->load->view('nastyHRMS/navigation');
              $this->load->view('nastyHRMS/header');
    
              $this->load->view('index');
              break; 

          
          case 'h1' :
          //addList
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('add_toDoList.php');
                break; 

          case 'h2' :
          //view chart
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_chart.php');
                break; 

          case 'h3' :
          //add Attendance

              $this->load->database();
              $this->load->model('m_emp');
              $this->load->model('m_attendance');
              $this->load->model('m_attendanceOut');
        
              $arr['arr'] = $this->m_emp->getAtt();
             
        

              $this->load->view('nastyHRMS/navigation');
              $this->load->view('nastyHRMS/header');
              $this->load->view('list_attandance',$arr);
              break;

            

          //aishah part
          case 'a2':
          //add department
              $this->load->view('nastyHRMS/navigation');
              $this->load->view('nastyHRMS/header');
              $this->load->view('add_department');
              break; 

          case 'a3':
          //list department
              $this->load->database();
              $this->load->model('m_department');

              $arr['arr'] = $this->m_department->getAll();

              $this->load->view('nastyHRMS/navigation');
              $this->load->view('nastyHRMS/header');
              $this->load->view('list_department',$arr);
              break;

          case "c20" :
          //edit department
          //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
              if ($this->input->get('edit')) {
              $deptID = $this->input->get('edit');
              //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
              //echo $staffId;
              $this->load->database();
              $this->load->model('m_department');
              $arr['id'] = $this->input->get('edit');
              //$arr['lvl'] = $this->m_item->getLvl();
              $arr['arr'] = $this->m_department->getAll($deptID);
              /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
              $this->_show('display' , $data , $key); */

              }       
              //$this->_show('display', $key);
              $this->load->view('nastyHRMS/navigation');
              $this->load->view('nastyHRMS/header');
              $this->load->view('edit_department',$arr);
              break;


          case "c21" :
          // delete department
            if ($this->input->get('delete')) {
            $deptID = $this->input->get('delete');
            $this->load->database();
            $this->load->model('m_department');

            $this->m_department->delete($deptID);
            redirect(site_url('dashboard/page/a3'),'refresh');
            break;

            }

            case "a19" :
            //view 1 by 1 Department
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $dept_id = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_department');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_department->getAll($dept_id);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_department.php',$arr);

                break;

              case "a18" :
                   if ($this->input->get('view')) {
                $empID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_emp');
                 $this->load->model('m_ot');
                 $this->load->model('m_attendance');
                  $this->load->model('m_attendanceOut');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_emp->getAtt($empID);
                $arr['attIn'] = $this->m_attendance->get();
                $arr['attOut'] = $this->m_attendanceOut->get();
                $arr['ot'] = $this->m_ot->get();

                $this->load->view('payroll_slip.php',$arr);
              }

                break;

                case "a17" :
            //view 1 by 1 Department
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $dept_id = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_department');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_department->getAll($dept_id);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_department.php',$arr);

                break;

            case "c40" :
            //print department
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $dept_id = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_department');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_department->getAll($dept_id);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                //$this->load->view('nastyHRMS/navigation');
                //$this->load->view('nastyHRMS/header');
                $this->load->view('print_department.php',$arr);

                break;


           case 'a6':
               //add mileage
               $this->load->view('nastyHRMS/navigation');
               $this->load->view('nastyHRMS/header');
               $this->load->view('add_mileage');
               
               break;

          case 'a7':
          //list mileage
            $this->load->database();
            $this->load->model('m_mileage');

            $arr['arr'] = $this->m_mileage->getAll();

            $this->load->view('nastyHRMS/navigation');
            $this->load->view('nastyHRMS/header');
            $this->load->view('list_mileage' ,$arr);
            break;

          case "c22" :
          //edit mileage
            //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
            if ($this->input->get('edit')) {
            $mileageID = $this->input->get('edit');
            //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
            //echo $staffId;
            $this->load->database();
            $this->load->model('m_mileage');
            $arr['id'] = $this->input->get('edit');
            //$arr['lvl'] = $this->m_item->getLvl();
            $arr['arr'] = $this->m_mileage->getAll($mileageID);
            /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
            $this->_show('display' , $data , $key); */

            }      
            //$this->_show('display', $key);
            $this->load->view('nastyHRMS/navigation');
            $this->load->view('nastyHRMS/header');
            $this->load->view('edit_mileage',$arr);
            break;


          case "c23" :
          // delete mileage
            if ($this->input->get('delete')) {
            $mileageID = $this->input->get('delete');
            $this->load->database();
            $this->load->model('m_mileage');

            $this->m_mileage->delete($mileageID);
            redirect(site_url('dashboard/page/a7'),'refresh');
            break;
            } 

             case "a20" :
            //view 1 by 1 Mileage
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $mlg_id = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_mileage');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_mileage->getAll($mlg_id);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_mileage.php',$arr);

                break;

            case "c41" :
            //print mileage
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $mileageID = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_mileage');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_mileage->getAll($mileageID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                //$this->load->view('nastyHRMS/navigation');
                //$this->load->view('nastyHRMS/header');
                $this->load->view('print_mileage.php',$arr);

                break;

          case 'a100':
          //add petty cash
            //$this->load->view('nastyHRMS/navigation');
            //$this->load->view('nastyHRMS/header');
            $this->load->view('Gaji/Payroll');
            break; 
               case 'a101':
          //add petty cash
            //$this->load->view('nastyHRMS/navigation');
            //$this->load->view('nastyHRMS/header');
            $this->load->view('income');
            break; 


          case 'a10':
          //add petty cash
            $this->load->view('nastyHRMS/navigation');
            $this->load->view('nastyHRMS/header');
            $this->load->view('add_petty_cash');
            break; 

          case 'a11':
          //list petty cash
            $this->load->database();
            $this->load->model('m_petty_cash');

            $arr['arr'] = $this->m_petty_cash->getAll();

            $this->load->view('nastyHRMS/navigation');
            $this->load->view('nastyHRMS/header');
            $this->load->view('list_petty_cash',$arr);
            break; 

                


          case "c24" :
          //edit petty cash
          //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
            if ($this->input->get('edit')) {
            $pettyID = $this->input->get('edit');
            //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
            //echo $staffId;
            $this->load->database();
            $this->load->model('m_petty_cash');
            $arr['id'] = $this->input->get('edit');
            //$arr['lvl'] = $this->m_item->getLvl();
            $arr['arr'] = $this->m_petty_cash->getAll($pettyID);
            /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
            $this->_show('display' , $data , $key); */

                      }       
            //$this->_show('display', $key);
            $this->load->view('nastyHRMS/navigation');
            $this->load->view('nastyHRMS/header');
            $this->load->view('edit_petty_cash',$arr);
            break;


          case "c25" :
          // delete petty cash
            if ($this->input->get('delete'))
            {
            $pettyID = $this->input->get('delete');
            $this->load->database();
            $this->load->model('m_petty_cash');

            $this->m_petty_cash->delete($pettyID);
            redirect(site_url('dashboard/page/a6'),'refresh');
            break;
            }

            case "a21" :
            //view Petty Cash
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $pettyID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_petty_cash');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_petty_cash->getAll($pettyID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_petty_cash.php',$arr);

                break;


              case "a22" :
                $this->load->database();
                $this->load->model('m_user');

                $arr['arr'] = $this->m_user->getAll();
                //$arr['lvl'] = $this->m_user->getLvl();
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('list_user.php',$arr);
                break;


            case "c42" :
            //print petty cash
              //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
              if ($this->input->get('print')) {
              $petty_id = $this->input->get('print');
              //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
              //echo $staffId;
              $this->load->database();
              $this->load->model('m_petty_cash');
              $arr['id'] = $this->input->get('print');
              //$arr['lvl'] = $this->m_item->getLvl();
              $arr['arr'] = $this->m_petty_cash->getAll($petty_id);

              }       
              
              $this->load->view('print_petty_cash.php',$arr);
            break;

            //end part  */

        	 //rabi part
        	 case 'a4' :
        	 //add employee
                $this->load->database();
                $this->load->model('m_department');
                
                $arr['arr'] = $this->m_department->get();
            	$this->load->view('nastyHRMS/navigation');
				      $this->load->view('nastyHRMS/header');
            	$this->load->view('add_employee',$arr);
            	break; 

        	 case 'a5':
        	 //list emp
                $this->load->database();
                $this->load->model('m_emp');

                $arr['arr'] = $this->m_emp->get();

            	  $this->load->view('nastyHRMS/navigation');
				        $this->load->view('nastyHRMS/header');
            	  $this->load->view('list_employee.php',$arr);
            	  break;

            case "c26":
            // delete
                if ($this->input->get('delete')) {
                $empID = $this->input->get('delete');
                $this->load->database();
                $this->load->model('m_emp');

                $this->m_emp->delete($empID);
                redirect(site_url('dashboard/page/a4'),'refresh');
                break;
                }

            case "c27" :
            //edit
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('edit')) {
                $empID = $this->input->get('edit');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_emp');
                $arr['id'] = $this->input->get('edit');
                $arr['lvl'] = $this->m_emp->getLvl();
                $arr['arr'] = $this->m_emp->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('edit_employee.php',$arr);

                break;

            case "h4" :
            //view 1 by 1 emp
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $empID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_emp');
                $arr['id'] = $this->input->get('view');
                $arr['lvl'] = $this->m_emp->getLvl();
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_emp->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_employee.php',$arr);

                break;


            case "c34" :
            //print
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $empID = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_emp');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_emp->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                //$this->load->view('nastyHRMS/navigation');
                //$this->load->view('nastyHRMS/header');
                $this->load->view('print_employee.php',$arr);

                break;

            case 'a8' :
            //add ot_claim

                $this->load->database();
                $this->load->model('m_emp');
                $arr['emp'] = $this->m_emp->get();
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('add_otclaim.php',$arr);
                break; 

            case 'a9':
            //list ot
                $this->load->database();
                $this->load->model('m_ot');

                $arr['arr'] = $this->m_ot->getAll();

                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('list_otclaim.php',$arr);
                break;

            case "c28":
             // delete
                if ($this->input->get('delete')) {
                $otID = $this->input->get('delete');
                $this->load->database();
                $this->load->model('m_ot');

                $this->m_ot->delete($otID);
                redirect(site_url('dashboard/page/a8'),'refresh');
                break;
            }

            case "c29" :
            //edit
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('edit')) {
                $otID = $this->input->get('edit');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_ot');
                $arr['id'] = $this->input->get('edit');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_ot->getAll($otID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('edit_otclaim.php',$arr);

                break;

            case "c35" :
            //print
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $otID = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_ot');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_ot->getAll($otID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                // $this->load->view('nastyHRMS/navigation');
                // $this->load->view('nastyHRMS/header');
                $this->load->view('print_otclaim.php',$arr);

                break;

            case "h5" :
            //view 1 by 1 OT
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $empID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_ot');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_ot->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_otclaim.php',$arr);

                break;

            case 'a12' :
            //add leave
                $this->load->database();
                $this->load->model('m_emp');
                $arr['emp'] = $this->m_emp->get();
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('apply_leave.php',$arr);
                break; 

            case 'a13':
            //view leave
                $this->load->database();
                $this->load->model('m_leave');

                $arr['arr'] = $this->m_leave->getAll();

                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('list_leave.php',$arr);
                break;

            case "c30":
            // delete
                if ($this->input->get('delete')) {
                $leaveID = $this->input->get('delete');
                $this->load->database();
                $this->load->model('m_leave');

                $this->m_leave->delete($leaveID);
                redirect(site_url('dashboard/page/a12'),'refresh');
                break;
            }

            case "c31" :
            //edit
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('edit')) {
                $leaveID = $this->input->get('edit');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_leave');
                $arr['id'] = $this->input->get('edit');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_leave->getAll($leaveID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('edit_leave',$arr);

                break;

            case "c36" :
            //print
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $empID = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_leave');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_leave->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                //$this->load->view('nastyHRMS/navigation');
                //$this->load->view('nastyHRMS/header');
                $this->load->view('print_leave.php',$arr);

                break;

            case "h6" :
            //view 1 by 1 leave
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $empID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_leave');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_leave->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_leave.php',$arr);

                break;

            case 'a14' :
            //add practical
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('add_practical.php');
                break; 

            case 'a15':
            //view practical
                $this->load->database();
                $this->load->model('m_intern');

                $arr['arr'] = $this->m_intern->getAll();

                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('list_intern.php',$arr);
                break;

            case "c32":
            // delete
                if ($this->input->get('delete')) {
                $internID = $this->input->get('delete');
                $this->load->database();
                $this->load->model('m_intern');

                $this->m_intern->delete($internID);
                redirect(site_url('dashboard/page/a15'),'refresh');
                break;
            }

            case "c39":
            // delete
                if ($this->input->get('delete')) {
                $userID = $this->input->get('delete');
                $this->load->database();
                $this->load->model('m_user');

                $this->m_user->delete($userID);
                redirect(site_url('dashboard/page/a22'),'refresh');
                break;
            }

            case "c33" :
            //edit
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('edit')) {
                $internID = $this->input->get('edit');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_intern');
                $arr['id'] = $this->input->get('edit');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_intern->getAll($internID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('edit_practical',$arr);
                break;

            case "c37" :
            //print
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('print')) {
                $empID = $this->input->get('print');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_intern');
                $arr['id'] = $this->input->get('print');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_intern->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                //$this->load->view('nastyHRMS/navigation');
                //$this->load->view('nastyHRMS/header');
                $this->load->view('print_practical.php',$arr);

                break;

                case "c38" :
            //edit
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('edit')) {
                $userID = $this->input->get('edit');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_user');
                $arr['id'] = $this->input->get('edit');
                $arr['lvl'] = $this->m_user->getLvl();
                $arr['arr'] = $this->m_user->getAll($userID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('edit_user',$arr);
                break;

            case "h7" :
            //view 1 by 1 practical
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $empID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_intern');
                $arr['id'] = $this->input->get('view');
                //$arr['lvl'] = $this->m_item->getLvl();
                $arr['arr'] = $this->m_intern->getAll($empID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_practical.php',$arr);

                break;
                
                 case "h8" :
            //view 1 by 1 practical
                //$data['title'] = '<i class="fa fa-file-text"></i> User Edit';
                if ($this->input->get('view')) {
                $userID = $this->input->get('view');
                //$staffId = $this->my_func->scpro_decrypt($this->input->get('edit'));
                //echo $staffId;
                $this->load->database();
                $this->load->model('m_user');
                $arr['id'] = $this->input->get('view');
                $arr['lvl'] = $this->m_user->getLvl();
                $arr['arr'] = $this->m_user->getAll($userID);

                /*$data['display'] = $this->load->view($this->parent_page.'/editStaff' , $arr , true);
                $this->_show('display' , $data , $key); */

                }       
                //$this->_show('display', $key);
                $this->load->view('nastyHRMS/navigation');
                $this->load->view('nastyHRMS/header');
                $this->load->view('view_user.php',$arr);

                break;

        	default:
    		//$this->_show();
    		break;
   		}
    }


    //Aisyah part
    public function addDept()
      {
        if ($this->input->post()) {
          $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

          $this->load->database();
          $this->load->model('m_department');
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
          $result = $this->m_department->insert($arr2);
          redirect(site_url('dashboard/page/a2'),'refresh');
        }else{
          redirect(site_url('dashboard/page/a2'),'refresh');
        }
      }

      public function update_department()
              {
                if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_department');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_department->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a3'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a3'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a3'),'refresh');
        }
      }

       public function add_mileage()
        {
            if ($this->input->post()) {
                $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

                $this->load->database();
                $this->load->model('m_mileage');
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

                $result = $this->m_mileage->insert($arr2);
                 

                redirect(site_url('dashboard/page/a6'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a6'),'refresh');
            }
        }

        public function getEmpId()
              {
                  $emp_name = $this->input->post('key');
                  
                
                 
                  $this->load->database();
                  $this->load->model('m_emp');
                  
                  $temp['emp'] = $this->m_emp->getSalary($emp_name);
                  
                  //$temp['num'] = $this->input->post('num');
                  $this->load->view("getAjaxEmpId", $temp);
                  
              }
               public function getEId()
              {
                  $emp_name = $this->input->post('key');
                  
                
                 
                  $this->load->database();
                  $this->load->model('m_emp');
                  
                  $temp['emp'] = $this->m_emp->getSalary($emp_name);
                  
                  //$temp['num'] = $this->input->post('num');
                  
                  $this->load->view("getAjaxEId", $temp);
              }

        public function update_mileage()
            {
          if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_mileage');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_mileage->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a7'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a7'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a7'),'refresh');
        }
      }

       public function updateUser()
              {
                      if ($this->input->post()) {
                      $arr = $this->input->post();          
                      $this->load->database();
                      $this->load->model('m_user');
                      //$this->load->library('my_func');
                      foreach ($arr as $key => $value) {
                        if ($value != null) {
                         /* if ($key == 'pass') {
                            $value = $this->my_func->scpro_encrypt($value);
                          }*/
                          if ($key == 'id') {
                            $id = $value;
                          }else{
                            $arr2[$key] = $value;
                          }             
                        }
                      }
                      $result = $this->m_user->update($arr2 , $id);
                      
                             echo "<script>
                          alert('Successfully Updated!');  
                      </script>";
                      redirect(site_url('dashboard/page/a22'),'refresh');
                    
                    }else{
                      redirect(site_url('dashboard/page/c38'),'refresh');
                    }
            }

       public function add_petty_cash(){
            if ($this->input->post()) {
                $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

                $this->load->database();
                $this->load->model('m_petty_cash');
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

                $result = $this->m_petty_cash->insert($arr2);
                 

                redirect(site_url('dashboard/page/a10'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a10'),'refresh');
            }
        }

        public function update_pettyCash()
            {
          if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_petty_cash');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_petty_cash->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a11'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a11'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a11'),'refresh');
        }
      }
      
     public function count_checkbox($str)
     {
        if (count($this->input->post('Expenses Type')) == 3)
        {
           return TRUE;
        
        } else {

          $this->form_validation->set_message("count_checkbox","Please choose at least one options");

          return FALSE;
        }
     }



    //Rabi part
    public function add_employee()
    {
            if ($this->input->post()) {
                $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

                $this->load->database();
                $this->load->model('m_emp');
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
                $result = $this->m_emp->insert($arr2);
                redirect(site_url('dashboard/page/a4'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a4'),'refresh');
            }
        }


         public function updateEmp(){
          if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_emp');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_emp->update($arr2 , $id);
                    if(!$result){
                     
                    redirect(site_url('dashboard/page/a5'),'refresh');
                    }
                else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a5'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a5'),'refresh');
        }
      }


     public function add_otclaim(){
        if ($this->input->post()) {
                $arr = $this->input->post();                
                $this->load->database();
                $this->load->model('m_ot');
               /* $this->load->library('my_func');
                foreach ($arr as $key => $value) {
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


                $result = $this->m_ot->insert($arr2);
                echo "<script>alert('Success')</script>";
                redirect(site_url('dashboard/page/a9'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a8'),'refresh');
            }
    }


    public function updateOT(){
          if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_ot');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_ot->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a9'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a9'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a9'),'refresh');
        }
      }



    public function apply_leave()
    {
        if ($this->input->post()) {
                $arr = $this->input->post();                
                $this->load->database();
                $this->load->model('m_leave');
               /* $this->load->library('my_func');
                foreach ($arr as $key => $value) {
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
                

                $result = $this->m_leave->insert($arr2);
                redirect(site_url('dashboard/page/a12'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a12'),'refresh');
            }
    }

    public function updateLeave()
              {
                if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_leave');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_leave->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a13'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a13'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a13'),'refresh');
        }
      }
      

      public function add_practical()
    {
        if ($this->input->post()) {
                $arr = $this->input->post();                
                $this->load->database();
                $this->load->model('m_intern');
               /* $this->load->library('my_func');
                foreach ($arr as $key => $value) {
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
                

                $result = $this->m_intern->insert($arr2);
                redirect(site_url('dashboard/page/a14'),'refresh');
            }else{
                redirect(site_url('dashboard/page/a14'),'refresh');
            }
    }

    public function updatePractical()
              {
                if ($this->input->post()) {
          $arr = $this->input->post();          
          $this->load->database();
          $this->load->model('m_intern');
          //$this->load->library('my_func');
          foreach ($arr as $key => $value) {
            if ($value != null) {
             /* if ($key == 'pass') {
                $value = $this->my_func->scpro_encrypt($value);
              }*/
              if ($key == 'id') {
                $id = $value;
              }else{
                $arr2[$key] = $value;
              }             
            }
          }
          $result = $this->m_intern->update($arr2 , $id);
          if(!$result){
           
          redirect(site_url('dashboard/page/a15'),'refresh');
          }
          else{
                      //$this->session->set_flashdata("message","Record Not Updated!");
                      redirect(site_url('dashboard/page/a15'),'refresh');
                     }
        
        }else{
          redirect(site_url('dashboard/page/a15'),'refresh');
        }
      }





      public function addList()
      {
        if ($this->input->post()) {
          $arr = $this->input->post(); 

                /*$data = array(
                'deptName' => $this->input->post('deptName'),
                'dept_description' => $this->input->post('dept_description')
                );*/

          $this->load->database();
          $this->load->model('m_index');
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
          $result = $this->m_index->insert($arr2);
          redirect(site_url('dashboard/page/h1'),'refresh');
        }else{
          redirect(site_url('dashboard/page/h1'),'refresh');
        }
      }



      public function logout()
      {
        redirect(site_url('login'),'refresh');
      }

}

