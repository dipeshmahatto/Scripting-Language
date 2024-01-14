<?php
require "database.php";

class user
{
    private $username;
    private $password;
    private $conn;
    public function __construct($u, $p)
    {
        $this->username = $u;
        $this->password = $p;
        $db = new database();
        $this->conn = $db->connect();
    }
    public function verify_user()
    {
        $res = $this->conn->query("select * from users where username='$this->username' and password='$this->password'");
        if ($res->num_rows ==1) {
            return true;
        } else {
            return false;
        }
    }

    public function logout(){
        session_destroy();
        header("Location:login.php");
    }
    public function change_password($newpassword, $username){
        $res = $this->conn->query("UPDATE users SET password='$newpassword' WHERE password='$this->password' AND username='$username'");
    
        if ($res === false) {
            // Handle the SQL error
            echo "Error: " . $this->conn->error;
            return false;
        }
    
        if ($this->conn->affected_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function add_user()
    {
        $res = $this->conn->query("Insert into users(username,password) values ('$this->username',$this->password')");
        if ($res->num_rows ==1) {
            return true;
        } else {
            return false;
        }
    }
}

?>