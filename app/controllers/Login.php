<?php


class Login extends Controller
{
    public function index()
    {
        if (isset($_SESSION["login"])) {
            if ($_SESSION["login"] == "petugas") {
                header("Location:" . BASEURL_PUBLIC . "/home");
            } else if ($_SESSION["login"] == "admin") {
                header("Location:" . BASEURL_PUBLIC . "/home/admin");
            } else if ($_SESSION["login"] == "masyarakat") {
                header("Location:" . BASEURL_PUBLIC . "/home/masyarakat");
            }
        }
        $data['judul'] = "Halaman Login";
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }
    public function login()
    {
        error_reporting(0);

        $data_tb_masyarakat = $this->model('Masyarakat_model')->getMasyarakat($_POST);
        $data_tb_petugas = $this->model('Petugas_model')->getLevel($_POST);
        // var_dump($data_tb_masyarakat);
        // exit;
        if ($data_tb_masyarakat) {
            $_SESSION["login"] = "masyarakat";
            header("Location:" . BASEURL_PUBLIC . "/home/masyarakat");
            exit;
        } else if ($data_tb_petugas[0]['level'] == 'petugas') {
            $_SESSION['login'] = $data_tb_petugas[0]['level'];
            header("Location:" . BASEURL_PUBLIC . "/home");
            exit;
        } else if ($data_tb_petugas[0]['level'] == 'admin') {
            $_SESSION['login'] = $data_tb_petugas[0]['level'];
            header("Location:" . BASEURL_PUBLIC . "/home/admin");
            exit;
        } else if (is_null($data_tb_petugas[0]) or is_null($data_tb_masyarakat)) {
            echo "<script>
            alert('username/password salah');
            document.location.href='http://localhost/pengaduan/public'
            </script>";
        }
    }
}
