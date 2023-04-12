<?php
    $data = $_POST['data'];
    $user = json_decode($data);
    //echo $user->password;

    $user = ['username'=>'alamin', 'password'=>'123', 'email'=>'alamin@aiub.edu'];
    $data = json_encode($user);

    echo $data;
?>