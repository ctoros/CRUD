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

//    function listUsers2(){
//        $db =
//    }
    function listUsers() {
        $db = new DataBase();
        $conn = $db->connect();
        if ($conn) {
            $sql = "SELECT id,user,pass FROM 'user'";
            if ($conn->query($sql)) {
                echo " paso a if query ";
                $rs = $conn->query($sql);   // connuery($sql);
                echo json_encode($rs);
                return $rs;
            }
//        if ($conn->query($sql) === true) {
//            return array(TRUE, $this->toJSON());
//            echo "entro a if listuser";            
//             return array(TRUE, $this->toJSON());
//        } else {
//              echo "fallo if listuser";
//          return array(FALSE, $conn->error);
//        }
        }
    }
    function listUsers2() {
        $db = new DataBase();
        $conn = $db->connect();
        if ($conn) {
            $sql = "SELECT id,user,pass FROM 'user'";
            $conn->query($sql);
            $resultado = $conn->query($sql);
            return $resultado;
        }
    }

//$resultado->fetch_array(MYSQLI_ASSOC); o $resultado->fetch_assoc(); asociaría el nombre de el campo con el arreglo y nos daría:

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

//    "DELETE FROM MyGuests WHERE id=3";


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
