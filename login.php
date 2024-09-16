
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login Page</title>
</head>
<body>
    <form action="loginhandler.php" method="POST"> 
        <label>Username</label>
        <input type="text" name="userName" required> <br>
        <label>Password</label>
        <input type="password" name="password" required> <br> <br>
        <button type="submit" name="submit">Login</button> <br> <br>
<a href="signup.php"><p>Don't have an account? SIGN UP</p></a>
    </form>
</body>
</html>
