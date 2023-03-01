<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $email = $_REQUEST['email']; 

        if($username == "" && $password == "" && $email == "") {
            echo "Null value ..";
        }else{
            $file = fopen('user.txt', 'a');
            $user = $username."|".$password."|".$email."\r\n";
            fwrite($file, $user);
            header('location: login.php');
        }
    }else{
        echo "invalid request...";
    }
?>