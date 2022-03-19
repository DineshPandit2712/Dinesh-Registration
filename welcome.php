<?php
 include"database.php";
 // Check user login or not
    if(!isset($_SESSION['email'])){
        header('Location: index.php');
    }
?>

<h1>This is welcome page</h1>
<h1><?php echo $_SESSION['email'] ?></h1>
<a href="logout.php" >Logout</a>