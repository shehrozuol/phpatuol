<?php

$conn = mysqli_connect("localhost","root","","PeakStore");

$pid = $_GET['red'];

?>




<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   


    <title>View Complete Product</title>
  </head>

  <body>

        <div class="container-fluid bg-dark text-white">

                <div class="row align-items-center">
                  <div class="col-0">
              <a href="index.php"><img src="abc.png" alt="Home Page" srcset="" height="100" width="100"> </a>
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
                        <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
                      </li>
                      <li class="nav-item active mr-5">
                        <a class="nav-link" href="about.php">About Us</a>
                      </li>
                      <li class="nav-item active mr-5">
                        <a class="nav-link" href="allproducts.php">Products</a>
                      </li>
                      <li class="nav-item active mr-5">
                          <a class="nav-link" href="allcontact.php">Contact Us</a>
                        </li>
                    </ul>
                      </div>
                    </nav>
          
              </div>
          
                <div class="container-fluid">

                <?php

                $rquery = "SELECT iname,productName,productPrice,productDetails,productDiscount from store WHERE productId=$pid;";

                $res =  mysqli_query($conn,$rquery);

                if(!$res) {
                die('Could not get data: ' . mysql_error());
}

                while($row = mysqli_fetch_assoc($res)){
                ?>

                        <div class="row mt-5 mb-5 align-items-center">
                            <div class="col-0 col-md-3 col-sm-0">
                                <img class="border border-2 border-primary" src="uploads/<?php echo $row['iname']; ?>" alt="Product 1"
                                srcset="" height="250" width="250">
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li><b>Product Name: <?php echo $row['productName']; ?></b></li>
                                    <li><b>Product Price: <?php echo $row['productPrice']; ?>$</b></li>
                                    <li><b>Product Discount: <?php echo $row['productDiscount']; ?>%</b></li>
                                
                                </ul>
                            </div>
                        </div>
                
                        <div class="row mt-2">
                            <div class="col-12">
                               <h4>Product Details</h4>
                            </div>
                            <div class="col-12">
                                <p> 
                                <?php echo $row['productDetails']; ?>
                                </p>
                            </div>
                        </div>
                
                    </div>


                <?php } ?>
                

          
          
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