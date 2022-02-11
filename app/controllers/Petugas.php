<?php

class Petugas extends Controller
{

    public function index()
    {
        $data["judul"] = "Halaman CRUD Petugas";
        echo $this->view("templates/header", $data);
        echo $this->view("petugas/index", $data);
        echo $this->view("templates/footer");
    }
}
