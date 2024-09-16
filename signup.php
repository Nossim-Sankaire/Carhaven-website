
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Sign up Page</title>
</head>
<body>
    <form action="signuphandler.php" method="POST"> 
    <label>First name</label>
    <input type="text" name="fname" required> <br>
    <label>Last name</label>
    <input type="text" name="lname" required> <br>
        <label>Username</label>
        <input type="text" name="username" required> <br>
        <label>Password</label>
        <input type="password" name="password" required> <br> 
        <label>Confirm password</label>
        <input type="password" name="c_password" required> <br> <br>
        <button type="submit" name="submit">Sign up</button> <br> <br>
<a href="login.php"><p>Already have an account? LOGIN</p></a>
    </form>
</body>
</html>
