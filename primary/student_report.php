<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Report View</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
<?php include("../functions.php"); ?>
</head>
<h1 class="auto-style1">Student Report Form</h1>
<body bgcolor="green">
    <div><h2 class="auto-style1">Pinefield Primary</h2></div>
    <form action="primary_report.php" method="POST">
    	<div class="auto-style1">
    <label for="std_name">Choose Student:</label><br>
    <select id="std_name" name="std_name" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="<?php echo $yr1class_names[0]; ?>">&nbsp;<?php echo $yr1class_names[0]; ?></option>
            <option value="<?php echo $yr1class_names[1]; ?>">&nbsp;<?php echo $yr1class_names[1]; ?></option>
            <option value="<?php echo $yr1class_names[2]; ?>">&nbsp;<?php echo $yr1class_names[2]; ?></option>
            <option value="<?php echo $yr1class_names[3]; ?>">&nbsp;<?php echo $yr1class_names[3]; ?></option>
            <option value="<?php echo $yr1class_names[4]; ?>">&nbsp;<?php echo $yr1class_names[4]; ?></option>
            <br><br>
            <option value="<?php echo $yr2class_names[0]; ?>">&nbsp;<?php echo $yr2class_names[0]; ?></option>
            <option value="<?php echo $yr2class_names[1]; ?>">&nbsp;<?php echo $yr2class_names[1]; ?></option>
            <option value="<?php echo $yr2class_names[2]; ?>">&nbsp;<?php echo $yr2class_names[2]; ?></option>
            <option value="<?php echo $yr2class_names[3]; ?>">&nbsp;<?php echo $yr2class_names[3]; ?></option>
            <br><br>
            <option value="<?php echo $yr3class_names[0]; ?>">&nbsp;<?php echo $yr3class_names[0]; ?></option>
            <option value="<?php echo $yr3class_names[1]; ?>">&nbsp;<?php echo $yr3class_names[1]; ?></option>
            <option value="<?php echo $yr3class_names[2]; ?>">&nbsp;<?php echo $yr3class_names[2]; ?></option>

            <br><br>
            <option value="<?php echo $yr4class_names[0]; ?>">&nbsp;<?php echo $yr4class_names[0]; ?></option>
            <option value="<?php echo $yr4class_names[1]; ?>">&nbsp;<?php echo $yr4class_names[1]; ?></option>
            <option value="<?php echo $yr4class_names[2]; ?>">&nbsp;<?php echo $yr4class_names[2]; ?></option>
            <option value="<?php echo $yr4class_names[3]; ?>">&nbsp;<?php echo $yr4class_names[3]; ?></option>
            <option value="<?php echo $yr4class_names[4]; ?>">&nbsp;<?php echo $yr4class_names[4]; ?></option>
            <option value="<?php echo $yr4class_names[5]; ?>">&nbsp;<?php echo $yr4class_names[5]; ?></option>
            <option value="<?php echo $yr4class_names[6]; ?>">&nbsp;<?php echo $yr4class_names[6]; ?></option>
            <option value="<?php echo $yr4class_names[7]; ?>">&nbsp;<?php echo $yr4class_names[7]; ?></option>
            <br><br>
            <option value="<?php echo $yr5class_names[0]; ?>">&nbsp;<?php echo $yr5class_names[0]; ?></option>
            <option value="<?php echo $yr5class_names[1]; ?>">&nbsp;<?php echo $yr5class_names[1]; ?></option>
            <option value="<?php echo $yr5class_names[2]; ?>">&nbsp;<?php echo $yr5class_names[2]; ?></option>
            <option value="<?php echo $yr5class_names[3]; ?>">&nbsp;<?php echo $yr5class_names[3]; ?></option>
            <option value="<?php echo $yr5class_names[4]; ?>">&nbsp;<?php echo $yr5class_names[4]; ?></option>
            <br><br>
            <option value="<?php echo $yr6class_names[0]; ?>">&nbsp;<?php echo $yr6class_names[0]; ?></option>
            <option value="<?php echo $yr6class_names[1]; ?>">&nbsp;<?php echo $yr6class_names[1]; ?></option>
            <br><br>
            
            <!-- Add more options as needed -->
        </select><br>
        <label for="admno">Admission No:</label><br>
        <input type="text" name="admno" id="admno" placeholder="Eg. PC0123"/><br>

        <label for="user">Class:</label><br>
        
        <select id="class" name="class" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="1">&nbsp;Year 1</option>
            <option value="2">&nbsp;Year 2</option>
            <option value="3">&nbsp;Year 3</option>
            <option value="4">&nbsp;Year 4</option>
            <option value="5">&nbsp;Year 5</option>
            <option value="6">&nbsp;Year 6</option>
            
            <!-- Add more options as needed -->
        </select><br>

        <input type="submit" name="submit" id="submit" />
    </div>
    </form>
</body>
</html> 