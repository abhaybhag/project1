
 

 <?php
 include ('dbconnect.php');

 if(isset($_POST['Login'])){
  $username=$_POST['username'];
  $password=$_POST['password'];
  $sql="SELECT * FROM abhay145 WHERE username='$username'";
  $sqlry=mysqli_query($conn,$sql);

if($username && $password!==""){
  if(mysqli_num_rows($sqlry) > 0){
    foreach($sqlry as $row){
      $user_name=$row['username'];
      $pass_word=$row['password'];
      $add_ress=$row['address'];
      $pho_ne=$row['phone'];
      $ema_il=$row['email'];
     
      
    }

  if(password_verify($password,$pass_word)){
     $_SESSION['auth']=true;
    $_SESSION['auth_user'] = [
      'user_name'=>$user_name,
      'add_ress'=>$add_ress,
      'pho_ne'=>$pho_ne,
      'ema_il'=>$ema_il,
    ];
  
    $_SESSION['login-status']="login in successfull";
    
    echo "<script>window.location.href='dashboard.php'</script>";

   
  
  }
}

else{
      $_SESSION['login-status']="username and password invalid";
  }


}
}



else{
  $_SESSION['login-status']="access denied";

}
?>
