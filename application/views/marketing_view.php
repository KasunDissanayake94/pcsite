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
                                <a href="#" style="color: black">Home</a>
                                <a href="#" style="color: black">Services</a>
                                <a href="#" style="color: black">Blog</a>
                                <a href="#" style="color: black">Contacts</a>

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
                <div class="col-lg-8">

                    <div class="card mt-4">
                        <?php foreach($item_list as $item){
                            $image=$item->image;
                            $id=$item->item_id;
                            $name=$item->item_name;
                            $price=$item->price;
                            $description=$item->description;
                            $colour=$item->colour;
                            $stock=$item->in_stock;

                        }?>
                        <img style="height: 350px;width: 350px" class="card-img-top img-fluid" src="<?php echo base_url();?>assets/<?=$item->image;?>.jpg" alt="">
                        <div class="card-body">
                            <h3 class="card-title"><?php echo $name;?></h3>
                            <h4><?php echo "Rs.".$price;?></h4>
                            <p class="card-text"><?php echo "Rs.".$description;?></p>
                            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
                            4.0 stars
                        </div>
                    </div>
                    <!-- /.card -->

                    <div class="card card-outline-secondary my-4">
                        <div class="card-header">
                            Other Details
                        </div>
                        <hr>
                        <div class="card-body">
                            <p>Colours</p>
                            <small class="text-muted"><?php echo $colour?></small>
                            <hr>
                            <p>In Stock</p>
                            <small class="text-muted"><?php if($stock){
                                    echo"Yes";
                                }else{
                                    echo "No";
                                }?></small>
                            <hr>
                            </div>
                    </div>
                    <!-- /.card -->

                </div>
            </div>
        </div>
    </div>

</div>


</body>
</body>
</html>
