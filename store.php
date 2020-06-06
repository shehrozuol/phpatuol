
<?php 

session_start();


if(!isset(($_SESSION['mail']))){
  header("Location:login.php");
}

    $conn = mysqli_connect("localhost","root","","PeakStore");

    $iname="";
    $pname ="";
    $pprice="";
    $pcode="";
    $pdiscount="";
    $psizes="";
    $pdetails="";

    print_r($_SESSION['mail']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main Store</title>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

</head>
<body>

<?php require_once('proceed.php'); ?>

<div class="container justify-content-center bg-success">
  <h4>Add Products to Database</h4><br><br>
  <form action="proceed.php" method="post" enctype='multipart/form-data'>
  <div class="row">
  <div class="col col-md-4">
  <input type="file" name="file" value="<?php echo $iname ?>" class="form-control-file bg-dark text-white">
  </div>

  <div class="col-2 col-md-2">
  <div class="checkbox">
  <input type="checkbox" class="" value="N" name="instock"> In Stock 
  </div>
  </div> 

  </div>
<br>
  <div class="row">
  <div class="col-6 col-md-4">
  <input type="text" name="pname" value="<?php echo $pname ?>" class="form-control" placeholder="Enter Product Name">
  </div>
  <br>
  <div class="col-2 col-md-2">
  <input type="number" name="pprice" value="<?php echo $pprice ?>" class="form-control" placeholder="Enter Price">
  </div>
  <br>
  <div class="col-4 col-md-2">
  <input type="text" name="pcode" value="<?php echo $pcode ?>" class="form-control" placeholder="Product Code">
  </div>
<br>

  </div>
  <br>
  <div class="row">
  <div class="col col-4 col-md-2">
  <input type="float" class="form-control" name="pdiscount" value="<?php echo $pdiscount ?>" placeholder="Disconut">
  </div>
  <div class="col col-6 col-md-4">
  <input type="text" class="form-control" name="psizes" value="<?php echo $psizes ?>" placeholder="Sizes with Comma">
  </div>
  </div>
  <br>
  <div class="row">
  <div class="col">
  <textarea name="pdetails" id="pd" cols="15" rows="5" class="form-control" placeholder="Enter Product Descripsion Here...">
  <?php echo $pdetails ?>
  </textarea>
  </div>
  </div>
  <br>

  <input type="hidden" name="id" value="<?php echo $row['productId']; ?>">

  <?php if($updatebtn== true){ ?>
    <button type="submit" name="update" class="btn btn-primary">Update Product</button> <?php } else{ ?>
    <button type="submit" name="submit" class="btn btn-primary">Add Product</button>
    <?php } ?>

  </form>
  <form action="process.php" method="post">
  <button class="btn btn-danger btn-lg float-right mt-3" name="outuser">Logout</button>
  </form>
<br>
</div>
    
    <br>
    <br>


  
<div class="container-fluid">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Code</th>
      <th scope="col">InStock</th>
      <th scope="col">Discount</th>
      <th scope="col">Sizes</th>
      <th scope="col">Descripsion</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $query = "SELECT * from store;";

      $res =  mysqli_query($conn,$query);

      if(!$res) {
        die('Could not get data: ' . mysql_error());
     }

      while($row = mysqli_fetch_assoc($res)){

    ?>

    <tr>
      <th scope="row"><b><?php echo $row['productId']; ?></b></th>
      <td><b><?php echo $row['productName']; ?></b></td>
      <td><img src="uploads/<?php echo $row['iname']; ?>" width="50" height="30"></td>
      <td><b><?php echo $row['productPrice']; ?>$</b></td>
      <td><b>#<?php echo $row['productCode']; ?></b></td>

      <td><b><?php 

        if($row['productInStock']==1){
          echo "✔";
        }
        else
        {
          echo "✖";
        }

      ?></b></td>


      <td><b><?php echo $row['productDiscount']; ?>%</b></td>
      <td><b><?php echo $row['productSizes']; ?></b></td>
      <td><b><?php echo $row['productDetails']; ?></b></td>

      <td> <a href="store.php?edit=<?php echo $row['productId']; ?>"  class="btn btn-primary">Edit</a>
            <a href="product.php?red=<?php echo $row['productId']; ?>"  class="btn btn-success mr-2">Read</a>
            <a href="store.php?del=<?php echo $row['productId']; ?>"  class="btn btn-danger mr-2">Delete</a>
        </td>
    </tr>
    
      <?php } ?>

</table>

</tbody>

</div>

</body>
</html>