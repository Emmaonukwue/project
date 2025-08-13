<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Broadsheet Request Form</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
.auto-style2 {
	font-size: large;
}
</style>
</head>
<div>
<img src="primary.png" alt="" height="50%" width="100%" />
<br />
</div>
<h1 class="auto-style1">Pinefield College Lekki</h1>
<body bgcolor="white">
    <div><h2 class="auto-style1">Broadsheet Form</h2></div>
    <form action="broadsheet_data.php" method="POST">
        <div class="auto-style1">
        <label for="user">Class:</label><br>
        
        <select id="class" name="class" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="1">&nbsp; 1</option>
            <option value="2">&nbsp; 2</option>
            <option value="3">&nbsp; 3</option>
            <option value="4">&nbsp; 4</option>
            <option value="5">&nbsp; 5</option>
            <option value="6">&nbsp; 6</option>
            
            <!-- Add more options as needed -->
        </select>
        <br>
        
        <input type="submit" name="submit" id="submit" />
    </div>
    </form>
</body>
</html> 