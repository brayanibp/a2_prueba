<?php

namespace App\Models;

use App\Models\User;

class DBConnection {
    private $server = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'a2_prueba';
    private $my_connection;

    public function getConnection()
    {
        $this->my_connection = mysqli_connect($this->server,$this->username,$this->password,$this->dbName);
        if ($this->my_connection->connect_error) {
            die("Connection failed: " . $this->my_connection->connect_error);
            return false;
        } else {
            return true;
        }
    }

    public function insertUser($user)
    {
        $this->getConnection();
        $sql = "INSERT INTO `users` (`cedula`, `full_name`, `email`, `phone_number`, `country`, `city`, `distributor_code`) VALUES (".$user->getCedula().", '".$user->getName()."', '".$user->getEmail()."', '".$user->getPhone()."', '".$user->getCountry()."', '".$user->getCity()."', ".$user->getDist_code().")";
        if ($this->my_connection->query($sql) === true) {
            $this->end();
            return true;
        } else {
            // echo "Error: " . $sql . "<br>" . $this->my_connection->error;
            $this->end();
            return false;
        }
    }

    public function selectUserByEmail($email) {
        $this->getConnection();
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $this->my_connection->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            // while($row = $result->fetch_assoc()) {
            //     echo "id: " . $row["id"]. " - Name: " . $row["cedula"]. " " . $row["full_name"]. "<br>";
            // }
            $array = $result->fetch_assoc();
            $user = new User($array['cedula'],$array['full_name'],$array['email'],$array['phone_number'],$array['country'],$array['city'],$array['distributor_code']);
            return $user;
        } else {
            return false;
        }
        $this->end();
    }

    public function end()
    {
        $this->my_connection->close();
        $this->my_connection = null;
        return true;
    }
}

//USAGE
/*
$myConnect = new DBConnection();
$myConnect->getConnection();
$myConnect->end();
$myConnect->insertUser($user);
$myConnect->selectUser($email);
*/