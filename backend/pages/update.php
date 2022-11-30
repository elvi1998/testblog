<?php

include "../../config/config.php";
include "../_class/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    
    $status = $_POST['status'];
    $db = new database();
    $db->update('pages',['title'=>$title,'description'=>$description, 'content'=>$content, 'is_menu'=>$is_menu,'status'=>$status],"id='$id'");
    if ($db) {
        header("Location:../index.php?route=pages");
    }

}
?>