<?php
    session_start();
    if(isset($_COOKIE['flag'])){
?>

<html lang="en">
<head>
    <title>Home Page</title>
</head>
<body>
        <h1>welcome home! <?=$_SESSION['username']?></h1>
        <a href="logout.php"> logout </a>
        <h3>User list</h3>

        <table border="1">
            <tr>
                <th>Sr</th>
                <th>Name</th>
                <th>Password</th>
                <th>Email</th>
                <th>Option</th>
            </tr>
        <?php 
            $file = fopen('user.txt', 'r');
            $sr=1;

            while(!feof($file)){
                $data = fgets($file);
                $user = explode('|', $data);
                if(count($user) > 1){
        ?>
            <tr>
                <td><?=$sr?></td>
                <td><?=$user[0]?></td>
                <td><?=$user[1]?></td>
                <td><?=$user[2]?></td>
                <td>
                    <a href="details.php?id=<?=$sr?>"> DETAILS </a> | 
                    <a href="edit.php"> EDIT </a> | 
                    <a href="delete.php"> DELETE </a>
                </td>
            </tr>

        <?php 
            }
            $sr++; 
        } ?>
        </table>

</body>
</html>

<?php 
    }else{
        header('location: login.php'); 
    }
?>