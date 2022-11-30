<?php
include "./../config/config.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];
    $newname = "newimage".rand(0000,9999)."blog.jpg";
    $image_tmp = $_FILES['image']['tmp_name'];
    $folder = "./download/" . $newname;
    $video = $_POST['video'];
    $cat_id = $_POST['cat_id'];
    $content = $_POST['content'];
    $status = $_POST['status'];
    $is_monset = $_POST['is_monset'];
  
    if (empty($_FILES['image']['name'])) {
        echo "<script>alert('Please upload image');</script>";
        echo "<script type='text/javascript'> document.location='index.php?route=blog/create'; </script>";
        exit();
    }
    else{
        move_uploaded_file($image_tmp, $folder);
        
    }
    
    $db = new database();
    $db->insert('blog',['title'=>$title,'description'=>$description,'image'=>$newname,'video'=>$video,'content'=>$content,'cat_id'=>$cat_id,'is_monset'=>$is_monset,'status'=>$status]);
    if ($db) {
        header("Location:index.php?route=blog");
    }
}
?>




