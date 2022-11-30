<?php
include 'backend/_class/database.php';
include 'includes/header.php';

@$route = $_GET['route'];

switch ($route){
    case "pages":
        include_once('pages/home.php');
        break;
    case "categories":
        include_once('pages/categories.php');
        include_once 'includes/sidebar.php';
        break;
    default :
        include_once('pages/home.php');
        break;
}
include 'includes/footer.php';
?>