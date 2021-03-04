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

    public function saveemployee($array)
    {
        $db = new Database;
        $db->query('INSERT INTO employees (name, last_name, email, gender, avatar, age, phone_number, city, street_address, state, postal_code) VALUES (:name, :last_name, :email, :gender, null, :age, :phone_number, :city, :street_address, :state, :postal_code)');
        $db->bind(':name', $array['name']);
        $db->bind(':last_name', $array['last_name']);
        $db->bind(':email', $array['email']);
        $db->bind(':gender', $array['gender']);
        $db->bind(':age', $array['age']);
        $db->bind(':phone_number', $array['phone_number']);
        $db->bind(':city', $array['city']);
        $db->bind(':street_address', $array['street_address']);
        $db->bind(':state', $array['state']);
        $db->bind(':postal_code', $array['postal_code']);
        $db->execute();
    }
}