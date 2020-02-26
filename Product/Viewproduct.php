<?php
    include('../config/config.php')
?>

<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <title>View Product</title>

    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" type="image/png" href="../assets/images/favicon.png" />
    <!-- Styles -->
    <link href="../assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/lib/helper.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="../assets/css/lib/toastr/toastr.min.css" rel="stylesheet">


    <link rel="stylesheet" href="dist/css/lightbox.min.css">
<script src="/path/to/cdn/jquery.min.js"></script>
<script src="dist/js/lightbox.js"></script>



    <style>

.gallery-title
{
    font-size: 36px;
    color: #42B32F;
    text-align: center;
    font-weight: 500;
    margin-bottom: 70px;
}
.gallery-title:after {
    content: "";
    position: absolute;
    width: 7.5%;
    left: 46.5%;
    height: 45px;
    border-bottom: 1px solid #5e5e5e;
}
.filter-button
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #42B32F;
    margin-bottom: 30px;

}
.filter-button:hover
{
    font-size: 18px;
    border: 1px solid #42B32F;
    border-radius: 5px;
    text-align: center;
    color: #ffffff;
    background-color: #42B32F;

}
.btn-default:active .filter-button:active
{
    background-color: #42B32F;
    color: white;
}

.port-image
{
    width: 100%;
}

.gallery_product
{
    margin-bottom: 30px;
}

    </style>


</head>

<body>
  <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures" id="sideNav">
      
  </div>
    <!-- /# sidebar -->
  <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
					 
                 
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
							<img class="pro_pic" src="../assets/images/icon1.jpg" alt="">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					 <div class="search_wrap d-block d-sm-none d-md-none d-lg-none d-xl-none">
					 <div class="inbox-head top_search">
                            <form action="#" class=" position inbox_input">
                              <div class="input-append inner-append border_11">
                                <input type="text" class="sr-input" placeholder="Search Mail">
                                <button class="btn sr-btn append-btn btn33" type="button"><i class="fa fa-search"></i></button>
                              </div>
                            </form>
                          </div>
					</div>
                </div>
            </div>
        </div>
  </div>




    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
   
                <!-- /# row -->
                <section id="main-content">
                  
                    <!-- /# row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-title">
                                    <h4>View Product</h4>
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">

                                        <div class="row">

                                            <div style="text-align:center;width:100%">
                                                <button class="btn btn-default filter-button" data-filter="pht">Photos</button>
                                                <!-- <button class="btn btn-default filter-button" data-filter="vdo">Videos</button> -->
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        </div>

                                        <div class="row">
                                            <?php 
                                                $getProductData = mysqli_query($con,"SELECT * FROM `product_data_master`");
                                                while($row = mysqli_fetch_assoc($getProductData))
                                                {
                                                    $imagePath = $row['image_path'];
                                                    ?>
                                                    <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                        <a class="demo" href="<?php echo $imagePath?>" data-lightbox="example">
                                                            <img src="<?php echo $imagePath?>" class="img-responsive" alt="image-1">
                                                        </a>
                                                    </div>
                                                    <?php
                                                }
                                            ?>
                                            
<!-- 
                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter vdo">
                                                <a class="demo" href="../assets/images/video1.jpg" data-lightbox="example">
                                                    <img src="../assets/images/video1.jpg" class="img-responsive" alt="image-1">
                                                </a>
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <a class="demo" href="../assets/images/slide2.jpg" data-lightbox="example">
                                                    <img src="../assets/images/slide2.jpg" class="img-responsive" alt="image-1">
                                                </a>
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter vdo">
                                                <a class="demo" href="../assets/images/video2.jpg" data-lightbox="example">
                                                    <img src="../assets/images/video2.jpg" class="img-responsive" alt="image-1">
                                                </a>
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <img src="../assets/images/slide3.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter vdo">
                                                <img src="../assets/images/video3.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <img src="../assets/images/slide4.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter vdo">
                                                <img src="../assets/images/video1.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <img src="../assets/images/slide5.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <img src="../assets/images/slide6.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter vdo">
                                                <img src="../assets/images/video2.jpg" class="img-responsive">
                                            </div>

                                            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter pht">
                                                <img src="../assets/images/slide7.jpg" class="img-responsive">
                                            </div> -->

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /# column -->
                     
                    </div>
                    <!-- /# row -->


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                 <p>2020 ©  mid Admin Board by <a href="#">webstrot.</a></p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>





    
    <!-- jquery vendor -->
    <script src="../assets/js/lib/jquery.min.js"></script>
    <script src="../assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../assets/js/lib/menubar/sidebar.js"></script>
    <script src="../assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <!-- bootstrap -->
    <script src="../assets/js/lib/toastr/toastr.min.js"></script>
    <script src="../assets/js/lib/toastr/toastr.init.js"></script>
    <script src="../assets/js/lib/bootstrap.min.js"></script><script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/lib/js-toast-master/toast.js"></script>
    <!-- scripit init-->
    <script>
        $(document).ready(function(){
            $.ajax({
            url : '../SideNav/sideNav.php',
            success : function(data){
                $('#sideNav').html(data);
            }
        })

     
    })


    $(document).ready(function(){

        

$(".filter-button").click(function(){
    var value = $(this).attr('data-filter');
    
    if(value == "all")
    {
        //$('.filter').removeClass('hidden');
        $('.filter').show('1000');
    }
    else
    {
//            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
//            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
        $(".filter").not('.'+value).hide('3000');
        $('.filter').filter('.'+value).show('3000');
        
    }
});

if ($(".filter-button").removeClass("active")) {
$(this).removeClass("active");
}
$(this).addClass("active");

});


 

    </script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


</body>

</html>

