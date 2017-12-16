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
  <div class="form" id="update_password_form">
    <h2></h2>
    <form action="/Auth/update_password" method="POST">
      <div>
        <label for="email">Email: </label>
        <?php if (isset($email_hash, $email_code)) {?>
        <input type="hidden" value="<?php echo $email_hash ?>" name="email_hash" />
        <input type="hidden" value="<?php echo $email_code ?>" name="email_code" />
        <?php } ?>
        <input type="email"  value="<?php echo (isset($email)) ? $email : ''; ?>" name="email" />
      </div>
      
      <div>
        <label for="password">New Password: </label> 
        <input type="password" value="" name="password" placeholder="Password"/>
      </div>  
        
      <div>
        <label for="password_conf">Confirm New Password: </label> 
        <input type="password" value="" name="password_conf" placeholder="Confirm Password"/>
      </div>

      <div>
        <input type="submit" value="Update Password" name="submit" />
      </div>
    </form>
    <?php
      echo validation_errors('<p class="error">');
    ?>
  </div>
</div>
<!--end of update password form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
  <script  src="<?php echo base_url();?>assets/login/js/index.js"></script>
</body>
</html>
