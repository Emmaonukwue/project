<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Load Headteacher's Comments</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
<?php include("../functions.php"); ?>
</head>
<h1 class="auto-style1">Load Headteacher's Comments</h1>
<body bgcolor="green">
    <div><h2 class="auto-style1">Pinefield Schools Lekki</h2></div>
    <form action="save_loadedtcomment.php" method="POST">
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
        

        <label for="teacher">Class teacher:</label><br>
        <select id="teacher" name="teacher" class="auto-style2" style="width: 136px; height: 28px" required>
        <option value="<?php echo $primary_teachers[0]; ?>">&nbsp;<?php echo $primary_teachers[0]; ?></option>
            <option value="<?php echo $primary_teachers[1]; ?>">&nbsp;<?php echo $primary_teachers[1]; ?></option>
            <option value="<?php echo $primary_teachers[2]; ?>">&nbsp;<?php echo $primary_teachers[2]; ?></option>
            <option value="<?php echo $primary_teachers[3]; ?>">&nbsp;<?php echo $primary_teachers[3]; ?></option>
            <option value="<?php echo $primary_teachers[4]; ?>">&nbsp;<?php echo $primary_teachers[4]; ?></option>
            <option value="<?php echo $primary_teachers[5]; ?>">&nbsp;<?php echo $primary_teachers[5]; ?></option>

            
            <!-- Add more options as needed -->
        </select><br>

        <label for="hteachercomment">Headteacher's comment:</label><br>
        <input type="text-area" name="hteachercomment" id="hteachercomment" placeholder="Type your subject comment here" /><br>

    

        <input type="submit" name="submit" id="submit" />
    </div>
    </form>
</body>
</html> 