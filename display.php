
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

<title>Registration</title>
</head>
<body>
    <div >
    <h2> Registration Details </h2> </div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>phone</th>
                <th>password</th>
                <th> Action </th>
            </tr>
        </thead>
        <tbody>
        <?php
include "database.php";
//$id = $_GET['id'];
$selectquery = "select * from registration" ;
$query = mysqli_query($sql,$selectquery);
$arr = mysqli_fetch_array($query);

while($arr = mysqli_fetch_array($query)) {
 
    



?>

            <tr>
                <td ><?php echo $arr['id']  ?></td>
                <td><?php echo $arr['name']  ?></td>
                <td><?php echo $arr['email']  ?></td>
                <td><?php echo $arr['phone']  ?></td>
                <td><?php echo $arr['password']  ?></td>
                <td><button type="button" class="btn btn-primary"> <a href="edit.php?id=<?php echo $arr['id']   ?>"> Edit </a></button></td>
                <td><button type="button" class="btn btn-danger"> <a href="delete.php?id=<?php echo $arr['id'] ?>"> Delete </a></button></td>
                <td></td>
            </tr>
            <?php
}
?>
        </tbody>
    </table>
</body>
</html>






