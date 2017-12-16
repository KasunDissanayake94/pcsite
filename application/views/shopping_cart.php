

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sales</title>
    <style>
        .member {
            display: inline-block;
            width:20%;
            vertical-align: top;
            text-align:center;
        }
        .name {
            display: inline;
        }
        .member img {
            width: 250px;
            height:180px;
            display: block;
        }
    </style>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no" />
    <link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/favicon.ico" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/search.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/navigation.css">
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
        $(document).ready(function()
        {
            $('#search').keyup(function()
            {
                var txt = document.getElementById('search').value;
                var txt2 = "";

                $.ajax(
                    {
                        url:"<?php echo base_url();?>index.php/fetch/livesearch",
                        method:"get",
                        data:{searchData:txt},
                        dataType:"text",
                        success:function(data)
                        {
                            $('#livesearch').html(data);
                        }
                    });

            });
        });
    </script>
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

                    <div class="navigation">
                        <nav>
                            <ul class="sf-menu">
                                <li><a href="<?php echo base_url();?>index.php/link/go/1">Home</a></li>
                                <li class="current"><a href="<?php echo base_url();?>index.php/link/go/2"">About</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/3">Services</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/4">Blog</a></li>
                                <li><a href="<?php echo base_url();?>index.php/link/go/5">Contacts</a></li>
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

<section class="page1_header" style="background-color: white" >
    <h1 style="margin-top: 5px; margin-bottom: 5px;margin-left: 5px;"> Shopping Cart</h1>

    <div class="row">


    </div>

    <br><br>
</section>


<!--==============================
              footer
=================================-->
<footer id="footer">
    <div class="container">
        <div class="row">
            <div class="grid_12">
                <div class="copyright"><span class="brand">WebStation Technology (Pvt) Ltd</span> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a>
                    <div class="sub-copy">Website designed by <a class="fwn" href="http://ucsc.cmb.ac.lk/" rel="nofollow"><span class="brand"> University of Colombo School of Computing</span></a></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a href="#" id="toTop" class="fa fa-chevron-up"></a>
</body>
</html>