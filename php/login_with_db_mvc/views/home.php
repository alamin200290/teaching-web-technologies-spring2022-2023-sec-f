<?php
    session_start();
    if(isset($_SESSION['flag'])){
?>

<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>welcome home! <?=$_SESSION['username']?></h1>
        <a href="../controllers/logout.php"> logout </a>
</body>
</html>

<?php 
    }else{
        header('location: login.php'); 
    }
?>