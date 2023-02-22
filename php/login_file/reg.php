<?php 
    session_start();
?>

<html>
    <head>
        <title>Sign Up</title>
    </head>

    <body>
        <form method="POST" action="regCheck.php" enctype="">
            <fieldset>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                Email: <input type="email" name="email" value=""/> <br> 
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>

    </body>
</html>