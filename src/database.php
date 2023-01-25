<?php

class database
{
    public $host = "database";
    public $username = "root";
    public $pass = "password";
    public $db = "docker_php";
    public $connect;

    function __construct()
    {
        $this->connect = mysqli_connect($this->host, $this->username, $this->pass);
        mysqli_select_db($this->connect, $this->db);
    }

    function tampil_data()
    {
        $data = mysqli_query($this->connect, "SELECT * FROM user");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    function tambah_data($nama, $alamat, $nohp)
    {
        mysqli_query($this->connect, "INSERT INTO user VALUES (NULL, '$nama', '$alamat', '$nohp')");
    }

    function edit_data($id)
    {
        $data = mysqli_query($this->connect, "SELECT * FROM user WHERE id='$id'");
        $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);

        return $rows;
    }

    function update_data($id, $nama, $alamat, $nohp)
    {
        mysqli_query($this->connect, "UPDATE user SET `nama`='$nama', `alamat`='$alamat', `nohp`='$nohp' WHERE `user`.`id`='$id'");
    }

    function delete_data($id)
    {
        mysqli_query($this->connect, "DELETE FROM `user` WHERE `user`.`id` = '$id'");
    }
}
