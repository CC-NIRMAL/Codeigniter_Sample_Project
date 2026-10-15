<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EmployeeController extends CI_Controller {

	public function index() {
        $this->load->view('template/header');
		$this->load->model('EmployeeModel');
		$employees = $this->EmployeeModel->getEmployees();
		$this->load->view('frontend/employee', ['employees' => $employees]);
		$this->load->view('template/footer');
	}
	public function add() {
		$this->load->view('template/header');
		$this->load->view('frontend/create');
		$this->load->view('template/footer');
	}
	public function create() {
		$this->load->view('template/header');
		$this->load->view('frontend/create');
		$this->load->view('template/footer');
	}
	public function login() {
		$this->load->view('template/header');
		$this->load->view('frontend/login');
		$this->load->view('template/footer');
	}
	public function edit($id) {
		$this->load->model('EmployeeModel');
		$employee = $this->EmployeeModel->getEmployeeById($id);
		$this->load->view('template/header');
		$this->load->view('frontend/edit', ['employee' => $employee]);  //Pass the employee data to the view and another way $data['employee'] = $employee; $this->load->view('frontend/edit', $data);
		$this->load->view('template/footer');
	}
	public function update($id) {
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');

		if ($this->form_validation->run()){
			$data = [
				'name' => $this->input->post('name'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone')
			];

			$this->load->model('EmployeeModel');
			$this->EmployeeModel->updateEmployee($id, $data);
			redirect(base_url('employee'));
		}else{
			$this->edit($id);
		}
	}


	public function delete($id) {
		$this->load->model('EmployeeModel');
		$this->EmployeeModel->deleteEmployee($id);
		redirect(base_url('employee'));
	}



	public function test() {

		$this->load->model('EmployeeModel');
		$employees_1 = $this->EmployeeModel->getEmployeesId(4);
		$employees_2 = $this->EmployeeModel->getEmployeesId(5);
		$this->load->view('template/header');
		$this->load->view('frontend/test', ['employees' => $employees_1]);
		$this->load->view('frontend/test', ['employees' => $employees_2]);

		$this->load->view('template/footer');
		// echo "<pre>";
		// print_r($employees);
		// echo "</pre>";

	}
	public function store(){
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Phone', 'required');

		if ($this->form_validation->run()){
		$data = [
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone')
		];

		// echo "Name: " . $data['name'] . "<br>";
		// echo "Email: " . $data['email'] . "<br>";
		// echo "Phone: " . $data['phone'] . "<br>";
		$this->load->model('EmployeeModel');
		$this->EmployeeModel->insertEmployee($data);
		redirect(base_url('employee'));

	}else{
		$this->create();
		}
		}

}
?>
