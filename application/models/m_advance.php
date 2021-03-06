<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_advance extends CI_Model {
	
	    /**
	     * @name string TABLE_NAME Holds the name of the table in use by this model
	     */
	    const TABLE_NAME = 'employee_advance';
	
	    /**
	     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
	     */
	    const PRI_INDEX = 'adv_id';
	
	    /**
	     * Retrieves record(s) from the database
	     *
	     * @param mixed $where Optional. Retrieves only the records matching given criteria, or all records if not given.
	     *                      If associative array is given, it should fit field_name=>value pattern.
	     *                      If string, value will be used to match against PRI_INDEX
	     * @return mixed Single record if ID is given, or array of results
	     */

		public function get($where = NULL) {
	        $this->db->select('*');
	        $this->db->from(self::TABLE_NAME);
	        if ($where !== NULL) {
	            if (is_array($where)) {
	                foreach ($where as $field=>$value) {
	                    $this->db->where($field, $value);
	                }
	            } else {
	                $this->db->where(self::PRI_INDEX, $where);
	            }
	        }
	        $result = $this->db->get()->result();
	        if ($result) {
	            if ($where !== NULL) {
	                return array_shift($result);
	            } else {
	                return $result;
	            }
	        } else {
	            return false;
	        }
	    }
	    public function getName($id = null)
	    {
	    	$this->db->select('emp_fullname');
	    	$this->db->from('employee_leave');
	    	$this->db->where('emp_id', $id);
	    	$result = $this->db->get()->result();
	    	$result = array_shift($result);
	    	return $result->emp_fullname;
	    }
	    public function getAdvance($id = null)
	    {
	    	$this->db->select('amount_res');
	    	$this->db->from(self::TABLE_NAME);
	    	$this->db->where('ep_id', $id);
	    	$result = $this->db->get()->result();
	    	$result = array_shift($result);
	    	return $result;
	    }
	    public function getLvl(){
            $this->db->select("*");
            $this->db->from('department');
            
            $result = $this->db->get()->result();
            return $result;
        }
	    public function getAll($where = null , $all = false)
	    {
	    	$this->db->select('*');
	        $this->db->from(self::TABLE_NAME);
	        if ($where !== NULL) 
	        {
	            if (is_array($where)) {
	                foreach ($where as $field=>$value) {
	                    $this->db->where($field, $value);
	                }
	            } else {
	                $this->db->where(self::PRI_INDEX, $where);
	            }
	        }
	       if (!$all) {
                $this->db->where('ep_id >', 0);
            }           
            $this->db->join('employee_information', 'emp_id = ep_id', 'left');

	       /* $this->db->join('user_level ul', 'user.us_lvl = ul.ul_id', 'left');*/
	        $result = $this->db->get()->result();
	        if ($result) {
	            if ($where !== NULL) {
	                return array_shift($result);
	            } else {
	                return $result;
	            }
	        } else {
	            return false;
	        }
	    }

	      public function insert(Array $data) {
	        if ($this->db->insert(self::TABLE_NAME, $data)) {
	            return $this->db->insert_id();
	        } else {
	            return false;
	        }
	    }

	     /**
	     * Updates selected record in the database
	     *
	     * @param Array $data Associative array field_name=>value to be updated
	     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
	     * @return int Number of affected rows by the update query
	     */
	    public function update(Array $data, $where = array()) {
	            if (!is_array($where)) {
	                $where = array(self::PRI_INDEX => $where);
	            }
	        $this->db->update(self::TABLE_NAME, $data, $where);
	        return $this->db->affected_rows();
	    }
	
	    /**
	     * Deletes specified record from the database
	     *
	     * @param Array $where Optional. Associative array field_name=>value, for where condition. If specified, $id is not used
	     * @return int Number of rows affected by the delete query
	     */
	    public function delete($where = array()) {
	        
	            $where = array(self::PRI_INDEX => $where);
	        
	        $this->db->delete(self::TABLE_NAME, $where);
	        return $this->db->affected_rows();
	    }
	}

