<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <h1> new database</h1>

 <?php
$servername = "localhost";
$username = "root";
$password ="";
//$database = "ayush22";

$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("System not coinnected due to" . $mysqli_connect_error());
}
else{
    echo "Connected Successfully!!";
}

$sql = "CREATE DATABASE ayush22";

$result = mysqli_query($conn, $sql);

if($result){
    echo " Created Successfully new data base";
}
else{
    die("NOt created due to " . mysqli_error($conn));
}


?>
</body>
</html>
