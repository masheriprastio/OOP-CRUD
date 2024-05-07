<?php
class database
{
    var $host = "127.0.0.1";
    var $username = "root";
    var $password = "";
    var $database = "db_belajar_php";
    var $koneksi = "";

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);

        if (mysqli_connect_errno()) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
    function tampil_data()
    {
        $data = mysqli_query($this->koneksi, "select * from user_login");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
    }
}
