<?php

include "../../config/config.php";
include "../_class/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $title = $_POST['title_c'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];
    $db = new database();
    $db->update('categories',['title_c'=>$title,'is_menu'=>$is_menu,'status'=>$status],"id='$id'");
    if ($db) {
        header("Location:../index.php?route=categories");
    }

}