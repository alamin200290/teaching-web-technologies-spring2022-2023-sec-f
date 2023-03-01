<?php 
    session_start();
    if(isset($_REQUEST['submit'])){

        //print_r($_GET);
        $username = $_REQUEST['username']; 
        $password = $_REQUEST['password']; 
        $flag = false;
        if($username == "" && $password == "") {
            echo "Null value ..";
        }else{
            $file = fopen('user.txt', 'r');
            
            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                //print_r($user);
                if($username == trim($user[0]) && $password == trim($user[1])){
                    $flag = true; 
                }
            }

            if($flag){
                setcookie('flag', 'abc', time()+300, '/');
                $_SESSION['username'] = $username;
                header('location: home.php');
                $flag = false; 
            }else{
                header('location: login.php?msg=error');
            }

            //echo  "invalid user!";
        }
    }else{
        echo "invalid request...";
    }
?>