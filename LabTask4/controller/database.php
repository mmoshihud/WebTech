<?php
class DBManager
{
    public $dbservername;
    public $dbusername;
    public $dbpassword;
    public $dbname;
    public $msg;
    public $conn;

    function __constructor()
    {
        $this->dbservername = 'localhost';
        $this->dbusername = 'root';
        $this->dbpassword = '';
        $this->dbname = 'webtech';

        $this->conn = new mysqli($this->dbservername, $this->dbusername, $this->dbpassword, $this->dbname);
        $this->msg = '';
        if ($this->conn->connect_error) {
            $this->msg = 'Unable to connect database';
        } else {
            $this->msg = 'Database successfully connected';
        }
    }

    function insertData($username, $email, $password, $gender, $dob, $image = '')
    {
        $query = "INSERT INTO users (username, password, gender, dob, image, email) VALUES ('$username', '$password', '$gender', '$dob', '$image', '$email')";
        $res = $this->conn->query($query);
        if ($res) {
            return '1 row inserted';
        } else {
            return 'Failed to insert data';
        }
    }
}
