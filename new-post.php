
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="new-post.php" method="post">
      <img class="mb-4"src="admin/img/logo.jpg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
      
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
     

      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" value="Sign In">
      <a href=""> </a>
    </form>
  </body>
</html>

<?php

include("connection/db.php");   

if(isset($_POST['submit']))
 {
     $email=$_POST['email'];
     $pass=$_POST['Password'];

   $query=mysqli_query($conn," select * from admin_login where admin_email='$email' and admin_pass='$pass' and admin_type='2' ");
    
   if($query) {
   if (mysqli_num_rows($query)>0) {
     $_SESSION['email'] = $email;
     header('location:admin/admin_dashboard.php'); 
   } 
   else {
     echo "<script>alert ('Email and password are invalid, Try again')</script>";
   }
   
   }
   }

?>
