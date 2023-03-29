<?php 
    session_start();
    //include_once('../models/db.php');
    //require('../models/db.php');
    require_once('../models/userModel.php');

    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];

        if($username == "" && $password == ""){
            echo "null data found...";
        }else{

           $status = auth($username, $password);
            if($status){
                $_SESSION['flag'] = "true";
                header('location: ../views/home.php');
            }else{
                echo "invalid user";
            }
        }
    
    }else{
        
        header('location: index.html');
    }

?>