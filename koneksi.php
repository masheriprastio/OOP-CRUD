<?php
class koneksi
{
    var $host = "127.0.0.1";
    var $username = "root";
    var $password = "";
    var $database = "db_belajar_php";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, 
        $this->password, $this->database);

        if (mysqli_connect_error()  ) {
            echo "Koneksi database gagal : " . mysqli_connect_error();
        }
    }
    function tampilData()
    {
        $data = mysqli_query($this->koneksi, "select * from user_login");
        while ($row = mysqli_fetch_array($data)) {
            $hasil[] = $row;
        }
        return $hasil;
        // echo json_encode($hasil);
    }
    function inputData($username, $password){
        $query = "INSERT INTO user_login (username, password) VALUES ('$username', '$password')";
        mysqli_query($this->koneksi, $query);
    
        // mysqli_query($this->koneksi, "INSERT INTO user_login VALUES(' ','$username', '$password')");
    }
    function deleteData($id){
        $stmt = $this->koneksi->prepare("DELETE FROM user_login WHERE id=?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $stmt->close();
    }
}

// $panggil = new koneksi();
// $panggil->tampil_data();
