<?php 
    $con = new mysqli('localhost','root','','store');
//for user information making available for all pages

    $array = $con->query("select * from users where id ='$_SESSION[userId]'");
    $user = $array->fetch_assoc();

	$base_path = "http://localhost/medical/";
?>