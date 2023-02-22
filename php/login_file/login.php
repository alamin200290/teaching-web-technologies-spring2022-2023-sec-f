<?php 
    session_start();
    print_r($_SESSION);
?>

<html>
    <head>
        <title>Name Check</title>
    </head>

    <body>
        <form method="POST" action="loginCheck.php" enctype="">
            <fieldset>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>

    </body>
</html>