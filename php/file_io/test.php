<?php 

    // $file = fopen('user.txt', 'r');
    // $data = fread($file, filesize('user.txt'));
    // fclose($file);
    // echo $data;

    // $file = fopen('user.txt', 'w');
    // $data = "this is another test...";
    // fwrite($file, $data);
    // fclose($file);
    // echo "Done!";

    $file = fopen('user.txt', 'a');
    $data = "this is another test...\r\n";
    fwrite($file, $data);
    fclose($file);
    echo "Done!";

?>