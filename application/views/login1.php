<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign in</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>

<body>
  
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <h1>Sign in</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">New User</div>
  </div>
  <div class="form">
    <h2>Sign in to your account</h2>
    <form action="<?php echo base_url();?>index.php/Auth/login_user" method="post" id="loginform">
        <?php if(! is_null($msg)) echo $msg;?>
        <br>
      <input type="email" name="username" placeholder="username"/>
      <input type="password" name="password" placeholder="Password" maxlength="10" minlength="5"/>
      <button type="submit" value="sign in">Sign in</button>
        <div class="cta"><a href="<?php echo base_url();?>index.php/link/go/1"">Go to Home</a></div>


    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form action="<?php echo base_url();?>index.php/Auth/register" method="post" id="createuserform">
      <input type="text" name="name" placeholder="Fisrtname LastName"/>
      <input type="email" name="email" placeholder="Email"/>
      <input type="text" name="password" placeholder="Password"/>
      <input type="text" name="repassword" maxlength="10" minlength="5" placeholder="Re-enter password"/>
      <button type="submit" value="register">Register</button>
    </form>
  </div>
  <div class="cta"><a href= "<?php echo base_url();?>index.php/auth/reset_password">Forgot your password?</a></div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>

    <script  src="<?php echo base_url();?>assets/login/js/index.js"></script>

</body>
</html>
