<?php

include "../../config/config.php";
include "../_class/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $status = $_POST['status'];
    $password = $_POST['password'];
    $db = new database();
    if (!empty($password)) {
        $password = md5($password);
        $db->update('admin',['name'=>$name, 'surname'=>$surname, 'username'=>$username, 'email'=>$email, 'status'=>$status, 'password'=>$password],"id='$id'");
    } else {
        $db->update('admin',['name'=>$name, 'surname'=>$surname, 'username'=>$username, 'email'=>$email, 'status'=>$status],"id='$id'");
    }
    if ($db) {
        header("Location:../index.php?route=admins");
    }

}