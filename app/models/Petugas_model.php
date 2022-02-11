<?php

class Petugas_model
{
    private $table = "petugas";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getLevel($data)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username and password=:password");
        $this->db->bind("username", $data['username']);
        $this->db->bind("password", $data['password']);
        // $this->db->execute();
        return $this->db->result();
    }
}
