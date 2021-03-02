<?php

class EmployeeModel {
    public function getallemployees() {
        $db = new Database;
        $db->query('SELECT * FROM employees');
        return $db->resultSet();
    }

    public function getemployee($array)
    {
        $db = new Database;
        $db->query('SELECT * FROM employees WHERE name=:name AND last_name=:last');
        $db->bind(':name', $array['name']);
        $db->bind(':last', $array['last_name']);
        return $db->singleRecord();
    }

}