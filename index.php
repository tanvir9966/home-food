<?php

session_start();

include "dbconn.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Food Delivery</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->

     <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>

                <ul class="list-unstyled components">

                    <?php

                    if (isset($_SESSION['customer_sid']))
                    {
                        ?>

                        <li class="active">
                            <a href="cus-page.php">Control panel</a>
                        </li>

                        <?php
                    }

                    elseif (isset($_SESSION['admin_sid']))
                    {
                        ?>

                        <li class="active">
                            <a href="admin-page.php">Control panel</a>
                        </li>

                        <?php
                    }

                    elseif (isset($_SESSION['del_man_sid']))
                    {
                        ?>

                        <li class="active">
                            <a href="del-man-page.php">Control panel</a>
                        </li>

                        <?php
                    }

                    ?>

<!--                    <li>-->
<!--                        <a href="about.html">About</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="recipe.html">Recipe</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="blog.html">Blog</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="contact.html">Contact Us</a>-->
<!--                    </li>-->

                    <?php

                    if (isset($_SESSION['customer_sid']) or isset($_SESSION['admin_sid']) or isset($_SESSION['del_man_sid']))
                    {
                        ?>

                        <li>
                            <a href="routers/logout.php">Logout</a>
                        </li>

                        <?php
                    }

                    ?>
                </ul>

            </nav>
        </div>

    <div id="content">
    <!-- header -->
    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="full">
                        <a class="logo" href="index.php"><img src="images/demo-logo.png" alt="#" /></a>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="full">
                        <div class="right_header_info">
                            <ul>
                                <li class="dinone">Contact No : <img style="margin-right: 15px;margin-left: 15px;" src="images/phone_icon.png" alt="#"><a href="#">987-654-3210</a></li>
                                <li class="dinone"><img style="margin-right: 15px;" src="images/mail_icon.png" alt="#"><a href="#">demo@gmail.com</a></li>

                                <?php

                                if (isset($_SESSION['admin_sid']) || isset($_SESSION['customer_sid']) or isset($_SESSION['del_man_sid']));

                                else
                                {
                                    ?>

                                    <li class="button_user"><a class="button active" href="login.php">Login</a><a class="button" href="register.php">Register</a></li>

                                    <?php
                                }
                                ?>

                                <li>
                                    <button type="button" id="sidebarCollapse">
                                        <img src="images/menu_icon.png" alt="#">
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="cus-page.php">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="slider_image full text_align_center">
                                                <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <h3>Discover Restaurants<br>That deliver near You</h3>
                                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                                <a class="main_bt_border" href="cus-page.php">Order Now</a>
                                            </div>
                                        </div>
                                        <div class="col-md-7 full text_align_center">
                                            <div class="slider_image">
                                                <img class="img-responsive" src="images/burger_slide.png" alt="#" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                                <i class="fa fa-angle-up"></i>
                            </a>
                            <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                                <i class="fa fa-angle-down"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->






 






    <!-- section -->
    <section class="resip_section">
        <div class="container">
            <div class="row">
         <div class="col-md-12">
       <div class="ourheading">
    <h2>Our Recipes</h2>
  </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="owl-carousel owl-theme">

                <?php

                $qry= "SELECT * FROM `items`";
                $run= mysqli_query($con, $qry);

                while ($data= mysqli_fetch_assoc($run))
                {
                    if ($data['deleted'] == 0)
                    {
                        ?>

                        <div class="item">
                            <div class="product_blog_img">
                                <img src="items/<?php echo $data['image']; ?>" alt="#" />
                            </div>
                            <div class="product_blog_cont">
                                <h3><?php echo $data['name']; ?></h3>
                                <h4><span class="theme_color">৳</span><?php echo $data['price']; ?></h4>
                            </div>
                        </div>

                        <?php
                    }
                }

                ?>

            </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
<div class="bg_bg">
<!-- about -->
<div class="about">
    <div class="container">
      <div class="row">
         <div class="col-md-12">
             <div class="title">
                <i><img src="images/title.png" alt="#"/></i>
                <h2>About Our Food & Restaurant</h2>
                <span>It is a long established fact that a reader will be distracted by the readable content of a
                   <br> page when looking at its layout. The point of using Lorem
                </span>
             </div>
          </div>
       </div>
       <div class="row">
         <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
             <div class="about_box">
                 <h3>Best Food</h3>
                 <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscureContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard </p>
             </div>
         </div>
          <div class="col-xl-5 col-lg-5 col-md-10 col-sm-12 about_img_boxpdnt">
             <div class="about_img">
                 <figure><img src="images/about-img.jpg" alt="#/"></figure>
             </div>
         </div>
       </div>
    </div>
</div>
<!-- end about -->

</div>
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo">
                          <a href="index.php"><img src="images/demo-logo.png" height="150px" width="150px" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <ul class="lik" style="margin-bottom: 50px">
<!--                            <li class="active"> <a href="index.php">Home</a></li>-->
<!--                            <li> <a href="about.html">About</a></li>-->
<!--                            <li> <a href="recipe.html">Recipe</a></li>-->
<!--                            <li> <a href="blog.html">Blog</a></li>-->
<!--                            <li> <a href="contact.html">Contact us</a></li>-->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>

</html>
