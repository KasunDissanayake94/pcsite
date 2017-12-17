<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Update Password</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>

<body>

<div class="pen-title">
  <h1>Update Password</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle">
  </div>
  
  <div class="form">
    <h2>Update Password</h2>
    <form action="<?php echo base_url();?>index.php/Auth/update_password" method="post" id="updatepasswordform">
 
      <div>
        <?php if (isset($email_hash, $email_code)) {?>
        <input type="hidden" value="<?php echo $email_hash ?>" name="email_hash" />
        <input type="hidden" value="<?php echo $email_code ?>" name="email_code" />
        <?php } ?>
        <input type="email"  value="<?php echo (isset($email)) ? $email : ''; ?>" name="email" placeholder="Email Address"/>
      </div>
 
      <input type="text" name="password" placeholder="New Password"/>
      <input type="text" name="repassword" maxlength="10" minlength="5" placeholder="Confirm New Password"/>
      <button type="submit" value="register">Change Password</button>
    </form>
  </div>
</div>
<!--end of update password form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="<?php echo base_url();?>assets/login/js/index.js"></script>
</body>
</html>
