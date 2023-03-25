
<html>
    <head>
        <title>Signup page</title>
    </head>

    <body>
        <form method="POST" action="../controllers/signupCheck.php" enctype="">
            <fieldset>
                Username: <input type="text" name="username" value=""/> <br>
                Password: <input type="password" name="password" value=""/> <br> 
                Email: <input type="email" name="email" value=""/> <br> 
                <input type="submit" name="submit" value="Submit"/>
                <a href="login.php">login</a>

            </fieldset>
        </form>
        
    </body>
</html>