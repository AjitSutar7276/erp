<?php
    	session_start();

        //$con = mysqli_connect("localhost","root","","surya_equipments");
        //$base_path = "http://localhost/Surya_Equipments_AdminPanel";
        //  $con = mysqli_connect("localhost","root","surya@123#","SuryaDb");
        $con = mysqli_connect("localhost","root","","easy_system");
         $base_path = "http://localhost/Demo";
    
        if(!$con)
        {
            echo "Connection Error".mysqli_error($con);
        }
    
        // if(isset($_SESSION['employee_id']) && isset($_SESSION['shortName'])){
        //     // echo "Session Set";
        //     $employee_id = $_SESSION['employee_id'];
        // }else{
        //     unset($_SESSION['employee_id']);
        //     unset($_SESSION['employee_id']);
        //     header('location: '.$base_path);
        // }
?>