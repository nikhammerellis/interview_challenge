<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee extends CI_Model {
	//class method to return all employees
	function get_all_employees()
	{ 
		$query = $this->db->query(
			"SELECT employees.id,
			employees.name as 'emp_name', 
			employees2.name as 'sup_name', 
			employees.bossId as 'distance_from_ceo'
			FROM employees 
			LEFT JOIN employees AS employees2
			ON employees.bossId = employees2.id"
		);
		//$query = $this->db->get('employees');
		return $query->result();
	}
}