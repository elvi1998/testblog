<?php
include "./../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $content = $_POST['content'];
    $is_menu = $_POST['is_menu'];
    $status = $_POST['status'];
    
    $db = new database();
    $db->insert('pages',['title'=>$title,'description'=>$description, 'content'=>$content, 'is_menu'=>$is_menu,'status'=>$status]);
    if ($db) {
        header("Location:index.php?route=pages");
    }

}

?>