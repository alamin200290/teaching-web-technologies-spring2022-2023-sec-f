<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 

        if($username == "" && $password == "") {
            echo "Null value ..";
        }else{
            if($username == $password){
                //echo "valid user!";
                //$_SESSION['flag'] = "true";
                setcookie('flag', 'abc', time()+300, '/');
                $_SESSION['username'] = $username;
                header('location: home.php');
            }else{
                echo "invalid user!";
            }
        }
    }else{
        echo "invalid request...";
    }
?>