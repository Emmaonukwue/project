<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
</head>
<h1 class="auto-style1">Admin Registration</h1>
<body bgcolor="green">
    <div></div>
    <form action="connect.php" method="POST">
        <div class="auto-style1">
        <label for="user">Name:</label><br>
        <input type="text" name="name" id="name" required/><br>

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" required/><br>
        
        <label for="phone">Phone:</label><br>
        <input type="text" name="phone" id="phone" required/><br>
        
        <label for="bgroup">Role:</label><br>
        <input type="text" name="bgroup" id="bgroup" required/><br>
        

        <input type="submit" name="submit" id="submit" value="Login" />
    </div>
    </form>
</body>
</html> 