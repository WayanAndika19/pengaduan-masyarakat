<?php

class Home extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['login'])) {
            header("Location:" . BASEURL_PUBLIC);
        }
        $data["judul"] = "Halaman Home Petugas";
        echo $this->view("templates/header", $data);
        echo $this->view("home/index", $data);
        echo $this->view("templates/footer");
    }
    public function admin()
    {
        if (!isset($_SESSION['login'])) {
            header("Location:" . BASEURL_PUBLIC);
        }
        $data["judul"] = "Halaman Home Admin";
        echo $this->view("templates/header", $data);
        echo $this->view("home/admin", $data);
        echo $this->view("templates/footer");
    }
    public function masyarakat()
    {
        if (!isset($_SESSION['login'])) {
            header("Location:" . BASEURL_PUBLIC);
        }
        $data["judul"] = "Halaman Home Masyarakat";
        echo $this->view("templates/header", $data);
        echo $this->view("home/masyarakat", $data);
        echo $this->view("templates/footer");
    }
}
