<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Register Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
  <div class="col-lg-5 col-lg-offset-2">
    <h1>Register Page</h1>
    <p>Fill in the details to register on our website.</p>
      <?php if (isset($_SESSION['success'])){

      ?>
          <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
      <?php
      }
      ?>
    <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>

    <form action="" method="POST">

        <div class="form-group">
            <label for="username" class="label-default">Username:</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class="form-group">
            <label for="email" class="label-default">Email:</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class="form-group">
            <label for="password" class="label-default">Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password2" class="label-default">Confirm Password::</label>
            <input class="form-control" name="password2" id="password2" type="password">
        </div>

        <div class="form-group">
            <label for="gender" class="label-default">Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="telephone" class="label-default">Telephone:</label>
            <input class="form-control" name="telephone" id="telephone" type="text">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" name="register">Register</button>
        </div>

    </form>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url();?>assets/js/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>