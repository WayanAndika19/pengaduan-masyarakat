<?php

class Register extends Controller
{
    public function index()
    {
        $data["judul"] = "Halaman Register";
        echo $this->view('templates/header', $data);
        echo $this->view('register/index', $data);
        echo $this->view('templates/footer', $data);
    }
    public function register()
    {
        if ($this->model('Masyarakat_model')->insertDataMas($_POST) > 0) {
            echo "<script>
                    alert('user baru berhasil ditambahkan');
                    document.location.href='http://localhost/pengaduan/public';
                </script>";
        }
    }
}
