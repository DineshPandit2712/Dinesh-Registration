<?php

include "database.php";

if(isset($_POST['submit'])) {

$name= $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$rpassword = $_POST['rpassword'];


$emailquery = "select * from registration where email='$email'";


$query = mysqli_query($sql,$emailquery);
$emailcount = mysqli_num_rows($query);

if($emailcount>0) {

    echo "
    <script>
    alert ('Email Already Exist')
    
    </script>
    ";
}
else {
if ($password === $rpassword)
{
    $query = "INSERT INTO `registration`( `name`, `email`, `phone`,  `password`, `rpassword`)
    VALUES ('$name','$email','$phone','$password','$rpassword')";
    $data = mysqli_query($sql,$query);
}
else {
    echo "Password Not Matching !!!";
}

}



}

if($data) {
    echo "
    <script> alert ('Data Inserted') </script>
    
    ";
}
else {
    echo "
    <script> alert ('Not Inserted !!!') </script>
    
    ";
}

header('Location:index.php');

?>




