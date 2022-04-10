<?php

/**
 * TEMPORARY DOCS
 * Don't create quieries here, call database for that
 * User these methods to do native user stuff here
 * 
 */

class User{

    private $database;
    private $table;

    public function __construct(){
        $this->database = new Database();
        $this->table = "user";

    }

    
    public function get_all(){
        $data_from_db = $this->database->select($this->table, "*")->output();
        return $data_from_db;
    }

    public function get($user_id){

        $user_id = Security::escape($user_id);
        $user_id = Security::clean($user_id);

        $data_from_db = $this->database->select($this->table, "*", "id", $user_id)->output();
        return $data_from_db;
    }

    public function add($fullname, $email, $password){
        $columns = array("fullname", "email", "password");

        $fullname = Security::escape($fullname);
        $email = Security::escape($email);
        $password = Security::escape($password);

        $fullname = Security::clean($fullname);
        $email = Security::clean($email);
        $password = Security::clean($password);

        $data = array($fullname, $email, $password);
        $executed = $this->database->insert($this->table, $columns, $data);
       
        return $executed;
    }

    public function edit($fullname, $email, $password, $id){

        $fullname = Security::escape($fullname);
        $email = Security::escape($email);
        $password = Security::escape($password);
        $id = Security::escape($id);

        $fullname = Security::clean($fullname);
        $email = Security::clean($email);
        $password = Security::clean($password);
        $id = Security::clean($id);

        $columns = array("fullname","email","password");
        $data = array($fullname, $email, $password);
        $executed = $this->database->update($this->table, $columns, $data, "id", $id);
       
        return $executed;
    }

    public function delete($id){

        $id = Security::escape($id);
        $id = Security::clean($id);

        $executed = $this->database->delete($this->table, "id", $id);
       
        return $executed;
    }

    public function search($data){

        $data = Security::escape($data);
        $data = Security::clean($data);

        $columns = array( "fullname","email","password");
        $values = array($data, $data, $data);
        $executed = $this->database->like($this->table, "*", $columns, $values, "OR")->output();
        return $executed;

    }

}
