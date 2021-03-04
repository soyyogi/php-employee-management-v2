<?php

class LoginModel {

    public function getadmin()
    {
        $db = new Database;
        $db->query('SELECT * FROM users WHERE name=:name');
        $db->bind(':name', 'admin');
        return $db->singleRecord();
    }

}