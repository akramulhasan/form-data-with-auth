<?php
//add data to DB
if(isset($_POST['submit'])){

  $name = $_POST['name'];
  $email = $_POST['email'];
  $dest = $_POST['dest'];
  //var_dump($name, $email, $dest);



  //DB Server Information
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "ak48";

  //DB Connection
  $conn = mysqli_connect($servername, $username, $password, $db);

  if(!$conn){
    die("Sorry Database is not connected".mysqli_connect_error());
  }else{

    //insert submitted data into DB table
    $sql = "INSERT INTO `user` (`ID`, `Name`, `Email`, `Dest`) VALUES (NULL, '$name', '$email', '$dest')";

    $result = mysqli_query($conn, $sql);

    if($result){
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Successfully Data saved!</strong></div>';
    }
  }
}



?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
<div class="container">
  <div class="row">
    <h2 class="text-center mt-4">PHP Form Submission</h2>
  <form action="" method="POST" class="row g-3">
  <div class="col-md-4">
    <label for="inputText" class="form-label">Name</label>
    <input required type="text" name="name" class="form-control" id="inputText">
  </div>
  <div class="col-md-4">
    <label for="inputEmail" class="form-label">Email</label>
    <input required type="email" name="email" class="form-control" id="inputEmail">
  </div>
  <div class="col-md-4">
    <label for="inputDest" class="form-label">Destination</label>
    <input required type="text" name="dest" class="form-control" id="inputDest">
  </div>
  <!-- <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>Dhaka</option>
      <option>Chittagong</option>
      <option>Rajsahi</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div> -->
  <div class="col-12">
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
  </div>
</div>


    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>