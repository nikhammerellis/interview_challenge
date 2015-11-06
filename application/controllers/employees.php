<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employees extends CI_Controller {
	public function index()
	{
		$this->load->model('Employee'); //load the Employee model
		$employee['employees'] = $this->Employee->get_all_employees(); //execute the get_all_employees function of the Employee model
		$this->load->view('employees', $employee); //load the employees view as well as the employee array which was populated on the previous line
	}
}