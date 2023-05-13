<?php
session_start();
if(isset($_SESSION['auth'])){
  $_SESSION['login-status']="already login";

  header('location:dashboard.php');
}


?>


 
 <?php
 include ('dbconnect.php');

 /*if(isset($_POST['Login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM abhay145 WHERE username='$username' AND password='$password' LIMIT 1";
  $sqlry=mysqli_query($conn,$sql);

if($username && $password!==""){
  if(mysqli_num_rows($sqlry)>0){
   foreach($sqlry as $row){
      $user_name=$row['username'];

    }
     $_SESSION['auth']=true;
    $_SESSION['auth_user'] = [
      'user_name'=>$user_name,
    ];
  
  
  $_SESSION['login-status'] = "You have logged in!";
           
     echo "<script>window.location.href='dashboard.php'</script>";
   header('Location:dashboard.php');
  }
  

else{
      $_SESSION['login-status']="username and password invalid";
  }


}

}
*/
?>

<?php
include ('dbconnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <style>
  <?php include "css/style2.css" ?>
</style>



</head>
<body>


<?php  include('_nav.php')  ?>

<center><div class="card col-12 col-sm-8 col-md-8 col-lg-7 rounded-5"  id="log" >

  <div class="card-body">
  <div class="d-flex flex-wrap gap-3" id="log1">
<a href="#" id="login-php" class="login-php"><h2 style="font-weight:900">Login</h2></a>
<a href="#" id="signup-php" class="signup-php"><h2 style="font-weight:900">Signup</h2></a>
</div>
<div class="row">
  
<div class="col-12 col-sm-6 col-md-6 col-lg-6 " id="video">
  <video class="col-12 col-sm-6 col-md-10 col-lg-10" loop autoplay muted>
    <source src="video/107385-login.mp4" type="video/mp4">
  </video>
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-6" style="padding-top:50px">
<?php  include('message.php')              ?>
<?php include ('login-php.php')?>
<?php  echo 'enter username and password'   ?>

<form action="login.php" method="post">
<div class="mb-3 col-12 col-sm-12 col-md-12 col-lg-10" >
  <input type="text" class="form-control"  placeholder="Username" name="username">
</div>
<div class="mb-3 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="password" class="form-control" placeholder="Password" name="password">
</div>
<div class="login-button">
<button style="background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(1,68,106,1) 12%, rgba(0,212,255,1) 100%);color:white;border:0px solid" id="login-btn" name="Login" class="col-12 col-sm-6 col-m-6 col-lg-6 p-3">Login</button>

</div>
</form>
</div>
</div>
   </div>

</div>
</center>
<center><div class="card rounded-5 col-12 col-sm-8 col-md-8 col-lg-7 sign
"  id="sign">

  <div class="card-body">
  <div class="d-flex flex-wrap gap-3" id="log1">
<a href="#" id="login-php" class="login-php"><h2 style="font-weight:900">Login</h2></a>
<a href="#" id="signup-php" class="signup-php"><h2 style="font-weight:900">Signup</h2></a>
</div>
<div class="row">
     
 
<div class="col-12 col-sm-6 col-md-6 col-lg-6" id="video">
  <video class="col-12 col-sm-6 col-md-10 col-lg-10" loop autoplay muted>

  <source src="video/23640-sign-in-or-sign-up-animation.mp4" type="video/mp4">
  </video>
</div>

<div class="col-12 col-sm-12 col-md-12 col-lg-6">
<?php  include ('signup-php.php');   ?>




<form action="login.php" method="post">

<?php  include('message1.php') ?>
  
<?php  echo 'enter username and password'   ?>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="text" class="form-control"  placeholder="Username" name="username">
</div>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="password" class="form-control" placeholder="Password" name="password">
</div>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="password" class="form-control" placeholder="Confirm Password" name="cpassword">
</div>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
<textarea class="form-control" rows="3" name="address"  placeholder="address"></textarea>

</div>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="email" class="form-control" placeholder="email" name="email">
</div>
<div class="mb-1 col-12 col-sm-12 col-md-12 col-lg-10">
  <input type="phone" class="form-control" placeholder="phone" name="phone">
</div>
<div class="login-button">
<button style="background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(1,68,106,1) 12%, rgba(0,212,255,1) 100%);color:white;border:0px solid" id="login-btn" name="add-user" class="col-12 col-sm-6 col-m-6 col-lg-6 p-3">signup</button>

</div>
</form>
</div>
</div>
   </div>

</div>
</center>
  </body>
</html>

<script>
  //login form
  $(document).ready(function(){
    $('#sign').hide();
  })
$(document).ready(function(){
  $('.signup-php').click(function(){
    $('#sign').show('slow');
    $('#log').hide();
  })
})

$(document).ready(function(){
  $('.login-php').click(function(){
    $('#log').show('slow');
    $('#sign').hide();


  })
})

</script>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

</body>
</html>