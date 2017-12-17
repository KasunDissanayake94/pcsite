<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Reset Password</title>
  
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
<!--<div class="module form-module">  -->
  <div class="form" id="reset_password_form">
    <center>
    <h2>Send Request</h2>
    <form action="/Auth/send_reset_password_email" method="post">
      <input type="email" value="<?php echo set_value('email')?>" name="email" placeholder="Email Address"/>
      <br>
      <button type="submit" name="submit">Reset Password</button>
    </form>
    </center>
    <?php
        echo validation_errors('<p class="error">');
        if (isset($error)) {
          echo '<p class="error">'.$error.'</p>';
        }
    ?>
  </div>
<!--</div>-->

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script>
<script  src="<?php echo base_url();?>assets/login/js/index.js"></script>

</body>
</html>
