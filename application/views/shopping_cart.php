<html>
<head>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/newstyle1.css">
    <link rel="stylesheet" type="text/css" href="../view/css/style1.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="test/main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>
<body class="home">
<div class="display-table">
    <div class="row display-table-row">

        <div class="col-md-12 col-sm-12 display-table-cell v-align">
            <!--<button type="button" class="slide-toggle">Slide Toggle</button> -->
            <div class="row">
                <header style="height:70px">
                    <div class="col-md-7">



                        <div class="title hidden-xs hidden-sm">
                            <h3></h3>
                        </div>

                        <!-- <div class="search hidden-xs hidden-sm">
                            <input type="text" placeholder="Search" id="search">
                        </div> -->
                    </div>
                    <div class="col-md-5">
                        <div class="header-rightside">
                            <ul class="list-inline header-top pull-left">
                                <a href="<?php echo base_url();?>index.php/link/go/1" style="color: white; margin: 20px">Home</a>
                                <a href="<?php echo base_url();?>index.php/link/go/2" style="color: white; margin: 20px">About</a>
                                <a href="<?php echo base_url();?>index.php/link/go/3" style="color: white; margin: 20px">Services</a>
                                <a href="<?php echo base_url();?>index.php/link/go/5" style="color: white; margin: 20px">Contacts</a>

                            </ul>
                            <ul class="list-inline header-top pull-right">
                                <!-- <li class="hidden-xs"><a href="#" class="add-project" data-toggle="modal" data-target="#add_project">Add Project</a></li> -->

                                <li>
                                    <a href="<?php echo base_url();?>index.php/manager/logout" class="view btn-sm active">log out</a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </header>
            </div>
            <div class="user-dashboard">

                <div style="" id="cart_details">
                    <h3 align="center">Cart is Empty</h3>

                </div>
                <a href="<?php echo base_url();?>index.php/Auth/proceed"><button type="button"  class="btn btn-success">Proceed to Checkout </button></a>





            </div>
        </div>
    </div>

</div>


</body>
</body>
</html>
<script>
    $(document).ready(function(){

        $('.add_cart').click(function(){
            var product_id = $(this).data("productid");
            var product_name = $(this).data("productname");
            var product_price = $(this).data("price");
            var quantity = $('#' + product_id).val();
            if(quantity != '' && quantity > 0)
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>/index.php/auth/add",
                    method:"POST",
                    data:{product_id:product_id, product_name:product_name, product_price:product_price, quantity:quantity},
                    success:function(data)
                    {
                        alert("Product Added into Cart");
                        $('#cart_details').html(data);
                        $('#' + product_id).val('');
                    }
                });
            }
            else
            {
                alert("Please Enter quantity");
            }
        });

        $('#cart_details').load("<?php echo base_url(); ?>/index.php/auth/load");

        $(document).on('click', '.remove_inventory', function(){
            var row_id = $(this).attr("id");
            if(confirm("Are you sure you want to remove this?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>/index.php/auth/remove",
                    method:"POST",
                    data:{row_id:row_id},
                    success:function(data)
                    {
                        alert("Product removed from Cart");
                        $('#cart_details').html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

        $(document).on('click', '#clear_cart', function(){
            if(confirm("Are you sure you want to clear cart?"))
            {
                $.ajax({
                    url:"<?php echo base_url(); ?>index.php/auth/clear",
                    success:function(data)
                    {
                        alert("Your cart has been clear...");
                        $('#cart_details').html(data);
                    }
                });
            }
            else
            {
                return false;
            }
        });

    });
</script>
