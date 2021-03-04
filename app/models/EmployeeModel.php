<?php

class EmployeeModel {
    public function getallemployees() {
        $db = new Database;
        $db->query('SELECT * FROM employees');
        return $db->resultSet();
    }

    public function getemployee($id)
    {
        $db = new Database;
        $db->query('SELECT * FROM employees WHERE id=:id');
        $db->bind(':id', $id);
        return $db->singleRecord();
    }

}