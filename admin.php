<?php
    $conn = mysqli_connect("localhost","root","","PeakStore");
    
    $usmail = "";
    $uspass = "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Peak Store User Panel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


</head>
<body>
<?php require_once('process.php'); ?>
<div class="container justify-content-center bg-success">
  <h2>Add Users for Data Entery</h2><br>
  <form action="process.php" method="post">
  <div class="row">
  <div class="col-6 col-md-4">
  <input type="email" name="email" value="<?php echo $usmail ?>" class="form-control" placeholder="Enter the E-mail">
  </div>
  <div class="col-6 col-md-4">
  <input type="password" name="pass" value="<?php echo $uspass ?>" class="form-control" placeholder="Enter the Password">
  </div>
  <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
  <div class="col-6 col-md-4">
    <?php if($updatebtn== true){ ?>
    <button type="submit" name="update" class="btn btn-primary">Update</button> <?php } else{ ?>
    <button type="submit" name="save" class="btn btn-primary">Add User</button>
    <?php } ?>
  </div>
  </div>

  </form>
<br>
</div>

<br>
<br>

<div class="container">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">E-mail</th>
      <th scope="col">Password</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $query = "SELECT * from users;";

      $res =  mysqli_query($conn,$query);

      if(!$res) {
        die('Could not get data: ' . mysql_error());
     }

      while($row = mysqli_fetch_assoc($res)){

    ?>

    <tr>
      <th scope="row"><b><?php echo $row['ID']; ?></b></th>
      <td><b><?php echo $row['Email']; ?></b></td>
      <td><b><?php echo $row['UserPass']; ?></b></td>

      <td> <a href="admin.php?edit=<?php echo $row['ID']; ?>"  class="btn btn-primary">Edit</a>
            <a href="admin.php?del=<?php echo $row['ID']; ?>"  class="btn btn-danger mr-2">Delete</a>
        </td>
    </tr>
    
      <?php } ?>

</table>

</tbody>

</div>

</body>
</html>