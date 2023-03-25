
<html>
    <head>
        <title>Login Page</title>
    </head>

    <body>
        <form method="POST" action="../controllers/loginCheck.php" enctype="">
            <fieldset>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                <input type="submit" name="submit" value="Submit"/>
                <a href="signup.php">Signup</a>

            </fieldset>
        </form>
        
    </body>
</html>