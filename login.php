<?php  
  
include("database.php");  

if(isset($_POST['submit']))  
{  
    $email=$_POST['email'];  
   
    $password=$_POST['password'];  
    $select="SELECT * FROM registration WHERE email='$email' AND password='$password'";  
    
    $run=mysqli_query($sql,$select);  
  
    if( mysqli_fetch_array($run) > 0)  
    {  
        
        $_SESSION['email']=$email;

        header("Location: welcome.php");
    }  
    else  
    {  
      echo "<script>alert('Email or password is incorrect!')</script>";  
    }  
}  
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>
<body>


<div class="wrapper fadeInDown row">
  <div id="formContent">
    <form action="" method ="POST">
      <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      
    
<br>
 <button name="submit"  type="submit" value="submit" class="btn btn-primary btn-sm">  LOG IN  </button>
</form>
  </div>
</div>
</body>
</html>