

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-migrate-1.1.1.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>assets/js/script.js"></script>
    <script src="<?php echo base_url();?>assets/js/superfish.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.equalheights.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.mobilemenu.js"></script>
    <script src="<?php echo base_url();?>assets/js/tmStickUp.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.ui.totop.js"></script>
    <script>
        $(window).load(function(){
            $().UItoTop({ easingType: 'easeOutQuart' });
            $('#stuck_container').tmStickUp({});
        });
    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="<?php echo base_url();?>assets/css/ie.css">
    <![endif]-->
</head>
<body>
<!--==============================
              header
=================================-->
<header>
    <div class="container">
        <div class="row">
            <div class="grid_12 rel">
                <h1>
                    <a href="index.html">
                        <img src="<?php echo base_url();?>assets/images/logo.png" alt="Logo alt">
                    </a>
                </h1>
            </div>
        </div>
    </div>
    <section id="stuck_container">
        <!--==============================
                    Stuck menu
        =================================-->
        <div class="container">
            <div class="row">
                <div class="grid_12 ">
                    <div class="navigation ">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="index.html">Home</a></li>
                                <li class="current"><a href="about.html">About</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                            </ul>
                        </nav>
                        <div class="clear"></div>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </section>
</header>
<!--==============================
              content
=================================-->

      <section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - July 28, 2014!</div>
          <div class="container">
              <div class="row">
                  <div class="grid_12">
                      <h3>Register</h3>
                      <p>Fill the details to register our website</p>

                  </div>


                  <?php if (isset($_SESSION['success'])){

                      ?>
                      <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
                      <?php
                  }
                  ?>
                  <?php echo validation_errors('<div class="alert alert-danger">','</div>');?>
                  <div class="grid_12">

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
              </div>
          </div>
      </section>

<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">Stable</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>