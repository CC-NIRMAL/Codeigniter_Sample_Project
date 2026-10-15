<?php

class EmployeeModel extends CI_Model
{
	public function getEmployees()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}

	public function insertEmployee($data)
	{
		return $this->db->insert('employee', $data);
	}

	public function getEmployeeById($id)
	{
		$query = $this->db->get_where('employee', ['id' => $id]);
		return $query->row();
	}

	public function updateEmployee($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('employee', $data);
	}

	public function deleteEmployee($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('employee');
	}


	public function getEmployeesId($id){

    return $this->db->where('id', $id)->get('employee')->row();
}


	}




?>
