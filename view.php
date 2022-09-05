<?php
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
  echo 'connected<br>';
 }

 $sql = "SELECT * FROM `user`";
 $result = mysqli_query($conn, $sql);

$numOfRow = mysqli_num_rows($result);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User List</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <h2 class="text-center pt-4">User List</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Destination</th>
          </tr>
        </thead>
        <tbody>
<?php 
while($row = mysqli_fetch_assoc($result)){?>
          <tr>
            <th scope="row"><?php echo $row['ID'] ?></th>
            <td><?php echo $row['Name'] ? $row['Name'] : 'N/A' ?></td>
            <td><?php echo $row['Email'] ? $row['Email'] : 'N/A' ?></td>
            <td><?php echo $row['Dest'] ? $row['Dest'] : 'N/A' ?></td>
          </tr>

<?php }


?>

        </tbody>
      </table>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>