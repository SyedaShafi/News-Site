<?php

include_once "config.php";
session_start();
if ($_SESSION['user_role']==0) {
    header("Location: $hostname/admin/post.php");
}

$id = $_GET['id'];

$sql = "DELETE FROM category WHERE category_id = '{$id}'";

if(mysqli_query($conn, $sql)){
    header("Location: $hostname/admin/category.php");
}

?>