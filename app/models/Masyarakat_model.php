<?php

class Masyarakat_model
{
    private $table = 'masyarakat';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getMasyarakat($data)
    {
        $this->db->query("SELECT * FROM masyarakat WHERE username=:username AND password=:password ");
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $data["password"]);
        return $this->db->result();
    }
    public function insertDataMas($data)
    {
        $this->db->query("SELECT * FROM masyarakat WHERE username=:username");
        $this->db->bind("username", $data["username"]);
        $mas = $this->db->result();
        $this->db->query("SELECT * FROM petugas WHERE username=:username");
        $this->db->bind("username", $data["username"]);
        $petugas = $this->db->result();
        if ($mas) {
            echo "<script>
				alert('username sudah terdaftar');
                document.location.href='http://localhost/pengaduan/public/register';
			</script>";
            return false;
        } else if ($petugas) {
            echo "<script>
				alert('username sudah terdaftar');
                document.location.href='http://localhost/pengaduan/public/register';
			</script>";
            return false;
        }
        if ($data["pass1"] !== $data["pass2"]) {
            echo "<script>
        		alert('password yang dimasukan tidak sama');
                document.location.href='http://localhost/pengaduan/public/register';
        	</script>";
            return false;
        }

        $this->db->query("INSERT INTO $this->table 
                          VALUES 
                          (:nik,:nama,:username,:password,:telp)
        ");
        $this->db->bind("nik", $data["nik"]);
        $this->db->bind("nama", $data["nama"]);
        $this->db->bind("username", $data["username"]);
        $this->db->bind("password", $data["pass1"]);
        $this->db->bind("telp", $data["telp"]);
        $this->db->execute();
        return $this->db->hitungBaris();
    }
}
