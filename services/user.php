<?php

include("connect.php");

class User {

    public $id = "";
    public $username = "";
    public $password = "";

    function setUsername($username) {
        $this->username = $username;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function save() {
        $db = new DataBase();
        $conn = $db->connect();
        if ($conn) {
            $sql = "INSERT INTO user (user, pass) VALUES ('" . $this->username . "', '" . $this->password . "')";
            if ($conn->query($sql) === TRUE) {
                return array(TRUE, $this->toJSON());
            } else {
                return array(FALSE, $conn->error);
            }
        }
    }

    function listUsers() {
        $filas = [];
        $db = new DataBase();
        $conn = $db->connect();
        if ($conn) {
            $sql = "SELECT id,user,pass FROM user";
            if ($conn->query($sql)) {

                $rs = $conn->query($sql);
//                print_r(mysqli_fetch_assoc($rs));
             // print_r(mysqli_fetch_assoc($rs));
//               array_push($users, $user->listUsers());
                
                
                
             while ($fila = mysqli_fetch_assoc($rs)){
//                 print_r($fila);
                 array_push($filas, $fila);
            }

//                return mysqli_fetch_all($rs);
            return $filas;
            }
        }
    }


    function delete($id) {
        $db = new DataBase();
        $conn = $db->connect();
        if ($conn) {
            $sql = "delete from user where id= $id";
            if ($conn->query($sql) === TRUE) {
                return array(TRUE, $this->toJSON());
            } else {
                return array(FALSE, $conn->error);
            }
        }
    }

    function toJSON() {
        $arr = array(
            'id' => "",
            'username' => $this->username,
            'password' => $this->password,
        );
        return json_encode($arr);
    }

}

?>
