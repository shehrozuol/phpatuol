
   <?php
   
   $conn = mysqli_connect("localhost","root","","PeakStore");

   $updatebtn = false;
   $id = 0;

   if(isset($_POST['save'])){

    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $securePass = md5($pass);

    $savequery = "INSERT INTO users(Email,UserPass) VALUES('$email','$securePass');";
    mysqli_query($conn,$savequery);

    header("Location:admin.php");

   }

   if(isset($_GET['del'])){

    $deleteid = $_GET['del'];

    $deletequery = "DELETE FROM users WHERE ID=$deleteid;";
    mysqli_query($conn,$deletequery);

   }

   if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $updatebtn = true;

    $editquery = "SELECT * FROM users WHERE ID=$id;";
    $result = mysqli_query($conn,$editquery);
    
    $row = mysqli_fetch_assoc($result);

    $usmail = $row['Email'];
    $uspass = $row['UserPass'];

   }

   if(isset($_POST['update'])){

    $id = $_POST['id'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    $securePass = md5($pass);

    $updatequery = "UPDATE users SET Email='$email',UserPass='$securePass' WHERE ID=$id;";
    mysqli_query($conn,$updatequery);

    header("Location:admin.php");

   }

   if(isset($_POST['userbtn'])){

   $usermail = $_POST['usermail'];
   $userpass = $_POST['userpass'];

   $sPass = md5($userpass);

   $uquery = "SELECT * from users;";

      $ures =  mysqli_query($conn,$uquery);

      if(!$ures) {
        die('Could not get data: ' . mysql_error());
     }
    
      while($urow = mysqli_fetch_assoc($ures)){

      if(($urow['Email']==$usermail) && $urow['UserPass']==$sPass){

         session_start();

         $_SESSION['mail'] = $usermail;
         header("Location:store.php");
         
      }
      else{

         header("Location:login.php");
         echo "Password or Email is Incorrect.";
      }
   }
}


if(isset($_POST['outuser'])){

   session_unset();
   session_abort();

   header("Location:index.php");
 }


   ?>