<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');
	
	class M_emp extends CI_Model {
	
	    /**
	     * @name string TABLE_NAME Holds the name of the table in use by this model
	     */
	    const TABLE_NAME = 'employee_information';
	
	    /**
	     * @name string PRI_INDEX Holds the name of the tables' primary index used in this model
	     */
	    const PRI_INDEX = 'emp_id';
	
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

		public function getSalary($where = NULL) {
	        $this->db->select('*');
	        $this->db->from(self::TABLE_NAME);
	        if ($where !== NULL) {
	            if (is_array($where)) {
	                foreach ($where as $field=>$value) {
	                    $this->db->where($field, $value);
	                }
	            } else {
	                $this->db->where('emp_fullname', $where);
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

	    public function getId($where = NULL) {
	        $this->db->select('*');
	        $this->db->from(self::TABLE_NAME);
	        if ($where !== NULL) {
	            if (is_array($where)) {
	                foreach ($where as $field=>$value) {
	                    $this->db->where($field, $value);
	                }
	            } else {
	                $this->db->where('emp_fullname', $where);
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
	    public function getLvl(){
            $this->db->select("*");
            $this->db->from('department');
            
            $result = $this->db->get()->result();
            return $result;
        }
	    public function getName($id = null)
	    {
	    	$this->db->select('emp_fullname');
	    	$this->db->from('employee_information');
	    	$this->db->where('emp_id', $id);
	    	$result = $this->db->get()->result();
	    	$result = array_shift($result);
	    	return $result->emp_fullname;
	    }

	    public function getAll($where = null, $all = false)
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

	        $this->db->join('intable', 'emp_id = stf_id', 'left');
	        $this->db->join('outtable', 'emp_id = sta_id', 'left');
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

	      public function getAtt($where = null, $all = false)
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
                
                 $this->db->join('intable i', 'emp_id = i.stf_id', 'left');
	        
	        	$this->db->join('outtable o', 'emp_id = o.sta_id', 'left');
	        	// $this->db->group_by('emp_id');
	        	$this->db->where('in_id = out_id');
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

