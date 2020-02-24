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

     <title>Company</title>

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
                                    <h4>Add Product</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>Product Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Product Name" name="product_name">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label>File</label>
                                                        <input type="file" class="form-control" name="file[]" multiple="multiple">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <center><button class="btn btn-info" name="submit">Submit</button><center>
                                                </div>
                                            </div>
                                        </form>
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
        
    function gstPanShipping(id)
    {   
        debugger
        if(id == 'default'){
            var gstNo = $('#gst').val();
            var subStr = gstNo.substring(2, 12);
            $('#pan').val(subStr);
            $('#pan').attr('readonly', true);
        }   
        
    }
    </script>



</body>

</html>

<?php 

        if(isset($_POST['submit']))
        {
            $productName = $_POST['product_name'];
            $total = count($_FILES['file']['name']);

            // Loop through each file
            for( $i=0 ; $i < $total ; $i++ ) {

            //Get the temp file path
            $tmpFilePath = $_FILES['file']['tmp_name'][$i];

            //Make sure we have a file path
            if ($tmpFilePath != ""){
            //Setup our new file path
            $newFilePath = "./uploadFiles/" . $_FILES['file']['name'][$i];

            //Upload the file into the temp dir
            if(move_uploaded_file($tmpFilePath, $newFilePath)) {

            //Handle other code here
            $insertData = mysqli_query($con,"insert into product_data_master(product_name,image_path)values('$productName','$newFilePath')");

            }

        }
        if($insertData)
        {
            echo '<script>toastr.success("Data Upload Successfully","Product",{
                "positionClass": "toast-bottom-right",
                timeOut: 5000,
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "preventDuplicates": true,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "tapToDismiss": false
        
            })</script>';
            echo "<script>setTimeout(\"location.href = 'addProduct.php';\",1000);</script>";

        }
}
            
        }   
?>