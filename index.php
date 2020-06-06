<?php

$conn = mysqli_connect("localhost","root","","PeakStore");
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


    <title>Peak Store | Welcome to Peak</title>
  </head>


  <body>

    <div class="container-fluid bg-dark text-white">

      <div class="row align-items-center">
        <div class="col-0">
    <a href=""><img src="abc.png" alt="Home Page" srcset="" height="100" width="100"> </a>
  </div>
  <div class="col-0">
      <h2 class="text-white">Peak Store</h2>
    </div>
    <div class="col-10">
        <a href="#" class="fa fa-facebook fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-twitter fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-instagram fa-lg text-white mr-5 float-right"></a>
        <a href="#" class="fa fa-youtube fa-lg text-white mr-5 float-right"></a>
      </div>

  </div>
  </div>

    <div class="container-fluid">

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white mt-1">
              <ul class="navbar-nav mr-auto mt-6 mt-lg-0">
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="">Home <span class="sr-only"></span></a>
                </li>
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item active mr-5">
                  <a class="nav-link" href="allproducts.php">Products</a>
                </li>
                <li class="nav-item active mr-5">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item btn-primary active  mr-5">
                    <a class="nav-link" href="login.php">LOGIN</a>
                  </li>
              </ul>
            </div>
          </nav>

    </div>

    <div class="container">

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="s2.jpg"  width="1100" height="400">
          </div>
          <div class="carousel-item">
            <img src="s3.jpg" width="1100" height="400">
          </div>
          <div class="carousel-item">
            <img src="s1.png" width="1100" height="400">
          </div>
        </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>

      <div class="container">
        
        <h2 class="text-left text-black mt-3 mb-2">Peak Store Products...</h2>
        <hr>
        <br>
        
        <div class="row">

        <?php

        $rquery = "SELECT productID,iname,productName from store;";
        $res =  mysqli_query($conn,$rquery);

        if(!$res) {
        die('Could not get data: ' . mysql_error());
        }
        
        $count = 0;

        while($row = mysqli_fetch_assoc($res)){

            if($count != 3){
        ?>

<div class="col-sm-4 mb-5">
            <div class="panel panel-primary">
              <div class="panel-heading"></div>
              <div class="panel-body"><a href="product.php?red=<?php echo $row['productID']; ?>">
                <img src="uploads/<?php echo $row['iname']; ?>" class="img-responsive border border-dark" width="275" height="160"></a></div>
              <div class="panel-footer"><b><?php echo $row['productName']; ?></b></div>
            </div>
          </div>
        
            <?php $count = $count+1;
            
            } ?>
        
          <?php  } ?>
     
      </div>
      <br>
      <br>


      <!-- Footer -->
<footer class="page-footer font-small stylish-color-white pt-4 bg-dark">

    <!-- Footer Links -->
    <div class="container text-center text-white text-md-left">
  
      <!-- Grid row -->
      <div class="row">
  
        <!-- Grid column -->
        <div class="col-md-4 mx-auto">
  
          <!-- Content -->
          <h4 class="font-weight-bold text-uppercase mt-3 mb-4">Peak Store Story</h4>
          <p>So as we watched the hunger in e-commerece world and to make easy for the people to buy
            their needs and wants, We open PeakStore in 2020. Thanks for coming here.
          </p>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <hr class="clearfix w-100 d-md-none">
  
        <!-- Grid column -->
        <div class="col-md-2 mx-auto">
  
          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>
  
          <ul class="list-unstyled">
            <li>
              <a href="#!">Link 1</a>
            </li>
            <li>
              <a href="#!">Link 2</a>
            </li>
            <li>
              <a href="#!">Link 3</a>
            </li>
            <li>
              <a href="#!">Link 4</a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <hr>
    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
      <li class="list-inline-item">
        <a class="btn-floating btn-fb mx-1">
          <i class="fa fa-facebook fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-tw mx-1">
          <i class="fa fa-twitter fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-gplus mx-1">
          <i class="fa fa-google fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-li mx-1">
          <i class="fa fa-linkedin fa-lg text-white mr-5"> </i>
        </a>
      </li>
      <li class="list-inline-item">
        <a class="btn-floating btn-dribbble mx-1">
          <i class="fa fa-youtube fa-lg text-white mr-5"> </i>
        </a>
      </li>
    </ul>
    <!-- Social buttons -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3 text-white">© 2020 Copyright:
      <a href="#"> peakstore.com</a>
    </div>
    <!-- Copyright -->
  
  </footer>
  <!-- Footer -->


      


  </body>

</html>