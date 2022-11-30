<?php
include "./../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title_c'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];

    $db = new database();
    $db->insert('categories',['title_c'=>$title,'is_menu'=>$is_menu,'status'=>$status]);
    if ($db) {
        header("Location:index.php?route=categories");
    }

}

?>