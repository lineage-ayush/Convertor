<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/ayushp/form.css"/>
    <title>Form2</title>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Converter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ayushp/form2.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/ayushp/form.php" target="_blank">Feedback</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav> 

<div class="container">
<h2 class="topo mt-3"> Enter your paragraph here: </h2>


<form  action="/ayushp/form2.php" method="post">
  
  <textarea class="form-control" id="txtarea" placeholder="Please Write here" name ="txtarea" rows="6"></textarea>
    <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
</form>

</div>
<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $txtarea = $_POST['txtarea'];
    }

    $servername="localhost";
    $username="root";
    $password="";
    $database="ayush22";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(!$conn){
        die("Sorry, there is some conection problem");
    }

    $sql = "INSERT INTO `convertor` (`txtarea`) VALUES ('$txtarea')";
    $result = mysqli_query($conn, $sql);
    if(!$result){
        die("Sorry, your conversion has not been submitted due to " . mysqli_error($conn));
   
    }
?>
<!-- <div class="container">
<h2 class="topo mt-3"> Enter your paragraph here: </h2>


<form  action="/ayushp/form2.php" method="post">
  
  <textarea class="form-control" id="txtarea" placeholder="Please Write here" name ="txtarea" rows="6"></textarea>
    <button type="submit" class="btn btn-primary mt-3">SUBMIT</button>
</form>

</div>
 -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>