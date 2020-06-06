<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>PeakStore User Panel</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <?php require_once('process.php'); ?>
  <body class="text-center bg-dark">
    <form class="container text-light" action="process.php" method="post">
    <br><br><br><br><br>
    <h2 class="mt-4">PeakStore User Panel</h2>
      <img class="mb-2" src="abc.png" alt="" width="100" height="100">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in to continue</h1>
      <div class="row justify-content-center mb-3">
      <div class="col col-6 col-md-4">
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="usermail" class="form-control border-light p-2" placeholder="Email address" required autofocus>
      </div>
      </div>
      <div class="row justify-content-center mb-4">
      <div class="col col-6 col-md-4">
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="userpass" class="form-control border-light p-2" placeholder="Password" required>
      </div>
      </div>
      <button class="btn btn-lg btn-primary" name="userbtn" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    </form>
  </body>
</html>
