<?php

include "../../config/config.php";

$id = $_GET['id'];
$db = new database();
$db->delete('blog', "id='$id'");



if($db==true){
        header("Location:./index.php?route=blog");

}
