<?php 
    //print_r($_GET);
    $username = $_REQUEST['username']; 
    $password = $_REQUEST['password']; 
    
    if($username == "" && $password == "") {
        echo "Null value ..";
    }else{
        if($username == $password){
            echo "valid user!";
        }else{
            echo "invalid user!";
        }
    }
?>