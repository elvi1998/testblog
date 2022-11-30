<?php
include "./../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $key = $_POST['_key'];
    $value = $_POST['value'];
    $status = $_POST['status'];

    $db = new database();
    $db->insert('settings',['_key'=>$key,'value'=>$value,'status'=>$status]);
    if ($db) {
        header("Location:index.php?route=settings");
    }

}

?>