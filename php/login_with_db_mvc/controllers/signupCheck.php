<?php 
    session_start();
    require_once '../models/userModel.php';

    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email']; 

        if($username == "" && $password == "" && $email == "") {
            echo "Null value ..";
        }else{
            $user = ['username'=>$username, 'password'=>$password, 'email'=>$email];
            $status = addUser($user);
            
            if($status){
                header('location: ../views/login.php');
            }else{
                echo "DB error, please try again...";
            }

        }
    }else{
        echo "invalid request...";
    }
?>