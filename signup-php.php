
<?php if(isset($_POST['add-user'])){
  $username=mysqli_real_escape_string($conn,$_POST['username']);
  $password=mysqli_real_escape_string($conn,$_POST['password']);
  $cpassword=mysqli_real_escape_string($conn,$_POST['cpassword']);
  $address=mysqli_real_escape_string($conn,$_POST['address']);
  $email=mysqli_real_escape_string($conn,$_POST['email']);
  $phone=mysqli_real_escape_string($conn,$_POST['phone']);
  
  
if($username || $password!==''){
    if($password===$cpassword){
    $emailquery="SELECT * FROM abhay145 WHERE username='$username'";
    $emailque=mysqli_query($conn,$emailquery);
    

    if(mysqli_num_rows($emailque)>0){
      $_SESSION['status']="user already registered";
    }
  
    else{
      $hash=password_hash($password,PASSWORD_DEFAULT);
      $sqlquery="INSERT INTO abhay145 (username,password,address,email,phone) VALUES ('$username','$hash','$address','$email','$phone')";
      $sql=mysqli_query($conn,$sqlquery);
      if($sql){
        $_SESSION['status']="user successfully registered";
      }
      else{
        $_SESSION['status']="please check username and password";

      }

    }

 
  }
  else{
    $_SESSION['status']="password and cpassword does not match";

  }
}

 }
?>