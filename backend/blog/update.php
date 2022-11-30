<?php

include "../../config/config.php";
include "../_class/database.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_GET['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $target_dir = "download/";
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $newname = "newimage".rand(0000,9999)."blog.jpg";
    $image_tmp = $_FILES['image']['tmp_name'];
    $folder = "../download/" . $newname;
    $video = $_POST['video'];
    $cat_id = $_POST['cat_id'];
    $content = $_POST['content'];
    $is_monset = $_POST['is_monset'];
    $status = $_POST['status'];
    $db = new database();
    if (empty($_FILES['image']['name'])) {
        $db->update('blog',['title'=>$title,'description'=>$description,'video'=>$video,'content'=>$content,'cat_id'=>$cat_id,'is_monset'=>$is_monset,'status'=>$status],"id='$id'");
        if ($db) {
            header("Location:../index.php?route=blog");
        } 
        exit();
    } else{
        move_uploaded_file($image_tmp, $folder);
        $db->update('blog',['title'=>$title,'description'=>$description,'image'=>$newname,'video'=>$video,'content'=>$content,'cat_id'=>$cat_id,'is_monset'=>$is_monset,'status'=>$status],"id='$id'");
        if ($db) {
            header("Location:../index.php?route=blog");
        }
    }

}
?>