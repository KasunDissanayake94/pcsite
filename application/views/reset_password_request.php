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
  
<div class="pen-title">
  <h1>Reset Password</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
  </div>
  
  <div class="form">
    <h2>Send Request</h2>
    <form action="<?php echo base_url();?>index.php/Auth/reset_password" method="post" id="resetpasswordform">
      <input type="email" name="email" placeholder="Email"/>
      <button type="submit" value="reset_password">Request</button>
    </form>
  </div>
</div>
  
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 
  <script  src="<?php echo base_url();?>assets/login/js/index.js"></script>
 
</body>
</html>