

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Contact Us</title>
</head>
<body>
    <form action="contacthandler.php" method="POST">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required> <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea><br><br>
        
        <button type="submit" name="submit2">Send Message</button> <br><br>
        <button type="submit" name="delete">Delete</button> <br><br>
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
