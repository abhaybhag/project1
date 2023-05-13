<?php if(isset($_SESSION['login-status']))
{
  ?>
<div class="alert alert-warning alert-dismissible fade show col-12 col-sm-12 col-md-12 col-lg-12" role="alert">
  <strong></strong><?php echo $_SESSION['login-status']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
  <?php
unset($_SESSION['login-status']);
  
}
?>