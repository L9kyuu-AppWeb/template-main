<?php
class databaseMysqli
{
    public $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName;
    private $mysqli;

    public function __Construct($db)
    {
        $this->dbName = $db;
        $this->bukaKoneksi();
    }
    public function bukaKoneksi()
    {
        $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    public function tampilData($tabel)
    {
        $result = $this->mysqli->query("SELECT * FROM $tabel where aktif='y'") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData3($tabel, $where)
    {
        $result = $this->mysqli->query("SELECT * FROM $tabel where aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData2($view, $tabel, $where)
    {
        $result = $this->mysqli->query("SELECT $view FROM $tabel where aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function tampilData4($view, $tabel)
    {
        $result = $this->mysqli->query("SELECT $view FROM $tabel where aktif='y'") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function login($panggil, $tabel, $where)
    {
        $result = $this->mysqli->prepare("SELECT $panggil FROM $tabel WHERE aktif='y' $where") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function lihatData($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where = '$cari'") or die('Gagal Lihat!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData2($tabel, $field, $where)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE aktif='y' and $where") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function lihatData3($tabel, $field, $where, $cari)
    {
        $result = $this->mysqli->query("SELECT $field as tampil FROM $tabel WHERE $where like '%$cari%'") or die('Gagal!');
        $row = $result->fetch_array();
        return $row['tampil'];
        mysqli_free_result($result);
    }

    public function insertData($tabel, $field, $isi)
    {
        $result = $this->mysqli->query("INSERT INTO $tabel ($field) VALUES ($isi)");
        return $result;
    }

    public function updateData($tabel, $isi, $where, $nilai)
    {
        $result = $this->mysqli->query("update $tabel set $isi where $where ='$nilai'") or die('Gagal Update!');
        return $result;
    }

    public function deleteData($tabel, $where, $nilai)
    {
        $result = $this->mysqli->query("update $tabel set aktif='n',terhapus=CURRENT_TIMESTAMP where $where = '$nilai'");
        return $result;
    }

    public function bebas($isi)
    {
        $result = $this->mysqli->query("$isi") or die('Tidak Ada Tabel!');
        return $result;
    }

    public function amankan($isi)
    {
        $result = $this->mysqli->real_escape_string($isi);
        return $result;
    }

    public function alert($pesan, $link)
    {
        $result = "<script type='text/javascript'>alert('$pesan');
        window.location.href='$link';;</script>";
        return $result;
    }

    public function alert2($link)
    {
        $result = "<script type='text/javascript'>
        window.location.href='$link';</script>";
        return $result;
    }
}
// Nama Database
// $db = new databaseMysqli('nama_database');