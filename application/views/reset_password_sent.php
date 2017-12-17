<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sent</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="<?php echo base_url();?>assets/login/css/style.css">

  
</head>

<body>
 
<div class="pen-title">
  <h2>
    <?php
      echo 'A link to reset your password has been sent to '. $email ;
      echo "If you don't see it, be sure to check your spam folders too!";
    ?>
  </h2>
</div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="<?php echo base_url();?>assets/login/js/index.js"></script>
 
</body>
</html>
