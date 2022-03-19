<?php

include "database.php";
$id = $_GET['id'];
$delquery = "DELETE FROM `registration` WHERE id =$id";
$data = mysqli_query($sql,$delquery);

header('Location:display.php');
?>