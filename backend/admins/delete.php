<?php

include "./../config/config.php";

$id = $_GET['id'];
$db = new database();
$db->delete('admin', "id='$id'");



if($db==true){
        header("Location:./index.php?route=admins");

}
