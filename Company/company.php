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
                                    <h4>Company Information</h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="basic-elements">
                                        <form method="post">

                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Company Name</label>
                                                        <input type="text" class="form-control" placeholder="Enter Company Name" name="comapny_name">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company Email</label>
                                                        <input id="example-email" class="form-control" type="email" placeholder="Enter Company Email..." name="email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company PAN No</label>
                                                        <input class="form-control" type="text" id="pan" placeholder="Enter Company PAN No..." name="pan" pattern="[A-Z]{5}[0-9]{4}[A-Z]{1}">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Company Contact</label>
                                                        <input type="text" class="form-control"  name="contact" placeholder="Enter Company Contact">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company GST No</label>
                                                        <input type="text" class="form-control"  name="gst" id="gst" placeholder="GST No." onkeyup="gstPanShipping('default');this.value = this.value.toUpperCase();"  pattern="\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Company Mobile No</label>
                                                        <input type="text" class="form-control"  placeholder="Company Mobile No." name="mobile">
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Company Address</label>
                                                        <textarea class="form-control"  name="address" rows="3" placeholder="Enter Company Address..."></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <center>
                                                <button type="submit" class="btn btn-default" name="submit"id="toastr-success-bottom-right">Submit</button>
                                            </center>
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
            $comapny_name = $_POST['comapny_name'];
            $email        = $_POST['email'];
            $pan          = $_POST['pan'];
            $contact      = $_POST['contact'];
            $gst          = $_POST['gst'];
            $mobile       = $_POST['mobile'];
            $address      = $_POST['address'];

            $submitquery = mysqli_query($con,"insert into customer_master(comany_name,contact,email,gst,pan,mobile,address,added_by)values('$comapny_name','$contact','$email','$gst','$pan','$mobile','$address','1')");

            if($submitquery)
            {
                echo '<script>toastr.success("Company Add Successfully","Comapny",{
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

            }
            
        }   
?>