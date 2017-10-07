

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Marketing Rental</title>
    <style>
        .art ul,
        .art li,
        .art a {
            padding: 0px;
            margin: 0px;
        }

        #nav1 a {
            color: #FFFFFF;
        }

        #nav1 li ul li a:hover {
            background-color: #394963;
        }

        div ul li ul {
            background-color: #4a5b78;
            list-style: none
        }

        #nav1 > li > a {
            background-color: #343434;
            padding: 16px 18px;
            text-decoration: none;
            display: block;
            border-bottom: 2px solid #212121;
            background: linear-gradient(top, #343434, #111111);
        }

        #nav1 li ul li a {
            padding: 10px 0;
            padding-left: 30px;
            text-decoration: none;
            display: block;
        }

        .art div {
            background-color: #000000;
            background-color: #343434;
            width: 280px;
        }
        /* Hide Dropdowns by Default */
        #nav1 li ul {
            display: none;
        }
    </style>
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
    <script src="<?php echo base_url();?>assets/js/dropdown.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#nav1 li").hover(
                function() {
                    $(this).find('ul').slideDown();
                },
                function() {
                    $(this).find('ul').slideUp();
                });
        });
    </script>
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
          <div class="art">
          <div id="container">
              <ul id="nav1">
                  <li><a href="#">Notebooks</a>
                      <ul>
                          <li><a href="#">Stage1</a></li>
                          <li><a href="#">Stage2</a></li>
                          <li><a href="#">Stage3</a></li>
                          <li><a href="#">Stage4</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Desktops</a>
                      <ul>
                          <li><a href="#">Stage1</a></li>
                          <li><a href="#">Stage2</a></li>
                          <li><a href="#">Stage3</a></li>
                          <li><a href="#">Stage4</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Projectors</a>
                      <ul>
                          <li><a href="#">Stage1</a></li>
                          <li><a href="#">Stage2</a></li>
                          <li><a href="#">Stage3</a></li>
                          <li><a href="#">Stage4</a></li>
                      </ul>
                  </li>
                  <li><a href="#">Projectors Screen</a>
                      <ul>
                          <li><a href="#">Stage1</a></li>
                          <li><a href="#">Stage2</a></li>
                          <li><a href="#">Stage3</a></li>
                          <li><a href="#">Stage4</a></li>
                      </ul>
                  </li>
                  <li><a href="#">LED TV</a>
                      <ul>
                          <li><a href="#">Stage1</a></li>
                          <li><a href="#">Stage2</a></li>
                          <li><a href="#">Stage3</a></li>
                          <li><a href="#">Stage4</a></li>
                      </ul>
                  </li>
              </ul>
              <div>
              </div>
              <div class="col-md-3 col-sm-6 "  style="margin-bottom: 20px;">
                  <div class="card h-100">

                      <img class="card-img-top" ></a>
                      <div class="card-body">
                          <h4 class="card-title">

                          </h4>

                          <p class="card-text">jbjbjbjbj</p>
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

    <script>
    $('ul.sf-menu li.dropdown').hover(function() {


        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
    }, function() {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
    });
</script>

</body>
</html>
