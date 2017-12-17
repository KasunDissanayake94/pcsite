

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
                                <li><a href="<?php echo base_url();?>index.php/link/go/6">Sales1</a></li>
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
    <h1 style="margin-top: 5px; margin-bottom: 5px;margin-left: 5px;"> Sales</h1>

        <div class="row">
            <div class="grid_3">
                <div class="art">
                    <div id="container">
                        <ul id="nav1">
                            <li><a href="#">Notebooks</a>
                                <ul>
                                    <li><a href="#">HP</a></li>
                                    <li><a href="#">Dell</a></li>
                                    <li><a href="#">Lenovo</a></li>
                                    <li><a href="#">Toshiba</a></li>
                                    <li><a href="#">Asus</a></li>
                                    <li><a href="#">Aspire</a></li>
                                    <li><a href="#">Acer</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Desktops</a>
                                <ul>
                                    <li><a href="#">HP</a></li>
                                    <li><a href="#">Dell</a></li>
                                    <li><a href="#">Lenovo</a></li>
                                    <li><a href="#">Acer</a></li>
                                    <li><a href="#">Samsung</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Computer Accessories</a>
                                <ul>
                                    <li><a href="#">CA 1</a></li>
                                    <li><a href="#">CA 2</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Network Accessories</a>
                                <ul>
                                    <li><a href="#">NA 1</a></li>
                                    <li><a href="#">NA 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="grid_9">
                <h1>Search Item to find here</h1>
                <br>
                <form method="post">
                    <input type="text" class="textbox" placeholder="Search" id="search">
                    <input title="Search" value="" type="submit" class="button">
                </form>
                <br><br>
                <div id="livesearch">


                <!-- Item images here -->
                <?php foreach($item_list as $item){
                    $item_name=($item->item_name);
                    $category=($item->category);
                    $description=($item->description);
                    $image=($item->image);
                    $link= '../view/images/profile_pic/'.$image.'.jpg';
                    //Call the admin controller calss to get the more information about the student
                    echo "<div class=\"member\" style='float:left;
    width:210px;
    height:350px;
    background:#fff;
    padding:3px;
    margin-right:3px;
    margin-left:3px;
    -moz-box-shadow: 1px 2px 2px #ccc;
    -webkit-box-shadow: 1px 2px 2px #ccc;
    box-shadow: 1px 2px 2px #ccc;'>
    
    <br><br>
    <img style=\"width: 200px;\" src=".$link. " alt=\"Click the link to see more info\"  />
    <div class=\"name\">
        <h4 style=\"font-size: 20px\" class=\"card-title\">
        $item_name
        </h4>
        <p style=\"font-size:15px\"  class=\"card-text\"></p>
        <p style=\"color: #003399; font-size: 15px\"  class=\"card-text\"><a href=".$category.">More Information</a></p>
    </div>
    

                    <div class="member">
                        <br>
                        <img style="font-size: 5px" src="<?php echo base_url();?>assets/<?=$item->image;?>.jpg" alt="Click the link to see more info"  />
                        <div class="name">
                            <h4 style="font-size: 20px" class="card-title">
                                <?=$item->item_name;?>

                            </h4>
                            <p style="font-size: 15px"  class="card-text">Rs.<?=$item->price;?>/=</p>
                            <p style="color: #003399; font-size: 15px"  class="card-text"><a href="<?php echo base_url();?>index.php/link/getdata/<?=$item->item_id;?>">more</a></p>
                            <button  style="padding: 15px 25px;
                              font-size: 9px;
                              text-align: center;
                              cursor: pointer;
                              outline: none;
                              color: #fff;
                              background-color: #00B4CC;
                              border: none;
                              border-radius: 15px;
                              box-shadow: 0 9px #999;"><a href="<?php echo base_url();?>index.php/link/addcart/<?=$item->item_id;?>">Add to cart</a>
                            </button>
                    </div>
                        <br>


                 }?>
                </div>

            </div>
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