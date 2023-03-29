<?php 
    session_start();
    require_once('../models/userModel.php');
    
    if(isset($_REQUEST['submit'])){
        
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $email = $_REQUEST['email'];

        if($username == "" && $password == "" && $email == ""){
            echo "null data found...";
        }else{

            $user = ['username'=>$username, 'password'=> $password, 'email'=> $email];
            $status = addUser($user);
            
            if($status){
                header('location: ../views/login.html');
            }else{
                echo "DB error, please try again";
            }
        }
    
    }else{
        
        header('location: ../views/login.html');
    }

?>