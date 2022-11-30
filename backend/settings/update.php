<?php

include "../../config/config.php";
include "../_class/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $key = $_POST['_key'];
    $value = $_POST['value'];
    $status = $_POST['status'];
    $db = new database();
    $db->update('settings',['_key'=>$key,'value'=>$value,'status'=>$status],"id='$id'");
    if ($db) {
        header("Location:../index.php?route=settings");
    }

}



