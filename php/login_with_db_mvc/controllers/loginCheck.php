<?php 
    session_start();
    //include '../models/userModel.php';
    //include_once '../models/userModel.php';

    //require '../models/userModel.php';
    require_once '../models/userModel.php';
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 

        if($username == "" && $password == "") {
            echo "Null value ..";
        }else{
            //$status = auth($username, $password);

            if($status){
                $_SESSION['flag'] = "true";
                $_SESSION['username'] = $username;
                header('location: ../views/home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        echo "invalid request...";
    }
?>