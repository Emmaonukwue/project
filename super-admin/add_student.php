<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Student</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
<?php include("../functions.php"); ?>
</head>
<h1 class="auto-style1">Admin Add Student Form</h1>
<body bgcolor="green">
    <div><h2 class="auto-style1">Pinefield Schools Lekki</h2></div>
    <form action="save_addedstudent.php" method="POST">
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
            <option value="<?php echo $yr7class_names[0]; ?>">&nbsp;<?php echo $yr7class_names[0]; ?></option>
            <option value="<?php echo $yr7class_names[1]; ?>">&nbsp;<?php echo $yr7class_names[1]; ?></option>
            <option value="<?php echo $yr7class_names[2]; ?>">&nbsp;<?php echo $yr7class_names[2]; ?></option>
            <option value="<?php echo $yr7class_names[3]; ?>">&nbsp;<?php echo $yr7class_names[3]; ?></option>
            <option value="<?php echo $yr7class_names[4]; ?>">&nbsp;<?php echo $yr7class_names[4]; ?></option>
            <br><br>
            <option value="<?php echo $yr8class_names[0]; ?>">&nbsp;<?php echo $yr8class_names[0]; ?></option>
            <option value="<?php echo $yr8class_names[1]; ?>">&nbsp;<?php echo $yr8class_names[1]; ?></option>
            <option value="<?php echo $yr8class_names[2]; ?>">&nbsp;<?php echo $yr8class_names[2]; ?></option>
            <option value="<?php echo $yr8class_names[3]; ?>">&nbsp;<?php echo $yr8class_names[3]; ?></option>
            <option value="<?php echo $yr8class_names[4]; ?>">&nbsp;<?php echo $yr8class_names[4]; ?></option>
            <option value="<?php echo $yr8class_names[5]; ?>">&nbsp;<?php echo $yr8class_names[5]; ?></option>
            <option value="<?php echo $yr8class_names[6]; ?>">&nbsp;<?php echo $yr8class_names[6]; ?></option>
            <option value="<?php echo $yr8class_names[7]; ?>">&nbsp;<?php echo $yr8class_names[7]; ?></option>

            <option value="<?php echo $yr9class_names[0]; ?>">&nbsp;<?php echo $yr9class_names[0]; ?></option>
            <option value="<?php echo $yr9class_names[1]; ?>">&nbsp;<?php echo $yr9class_names[1]; ?></option>
            <option value="<?php echo $yr9class_names[2]; ?>">&nbsp;<?php echo $yr9class_names[2]; ?></option>
            <option value="<?php echo $yr9class_names[3]; ?>">&nbsp;<?php echo $yr9class_names[3]; ?></option>
            <option value="<?php echo $yr9class_names[4]; ?>">&nbsp;<?php echo $yr9class_names[4]; ?></option>
            <option value="<?php echo $yr9class_names[5]; ?>">&nbsp;<?php echo $yr9class_names[5]; ?></option>
            <option value="<?php echo $yr9class_names[6]; ?>">&nbsp;<?php echo $yr9class_names[6]; ?></option>
            <option value="<?php echo $yr9class_names[7]; ?>">&nbsp;<?php echo $yr9class_names[7]; ?></option>

            <option value="<?php echo $yr10class_names[0]; ?>">&nbsp;<?php echo $yr10class_names[0]; ?></option>
            <option value="<?php echo $yr10class_names[1]; ?>">&nbsp;<?php echo $yr10class_names[1]; ?></option>
            <option value="<?php echo $yr10class_names[2]; ?>">&nbsp;<?php echo $yr10class_names[2]; ?></option>
            <option value="<?php echo $yr10class_names[3]; ?>">&nbsp;<?php echo $yr10class_names[3]; ?></option>
            <option value="<?php echo $yr10class_names[4]; ?>">&nbsp;<?php echo $yr10class_names[4]; ?></option>
            
            <option value="<?php echo $yr11class_names[0]; ?>">&nbsp;<?php echo $yr11class_names[0]; ?></option>
            <option value="<?php echo $yr11class_names[1]; ?>">&nbsp;<?php echo $yr11class_names[1]; ?></option>
            <option value="<?php echo $yr11class_names[2]; ?>">&nbsp;<?php echo $yr11class_names[2]; ?></option>
            <option value="<?php echo $yr11class_names[3]; ?>">&nbsp;<?php echo $yr11class_names[3]; ?></option>
            <option value="<?php echo $yr11class_names[4]; ?>">&nbsp;<?php echo $yr11class_names[4]; ?></option>
            <option value="<?php echo $yr11class_names[5]; ?>">&nbsp;<?php echo $yr11class_names[5]; ?></option>
            <option value="<?php echo $yr11class_names[6]; ?>">&nbsp;<?php echo $yr11class_names[6]; ?></option>
            
            <!-- Add more options as needed -->
        </select><br>
        

        <label for="class">Class:</label><br>
        <select id="class" name="class" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="1">&nbsp;Year 1</option>
            <option value="2">&nbsp;Year 2</option>
            <option value="3">&nbsp;Year 3</option>
            <option value="4">&nbsp;Year 4</option>
            <option value="5">&nbsp;Year 5</option>
            <option value="6">&nbsp;Year 6</option>
            <option value="1">&nbsp;Year 7</option>
            <option value="2">&nbsp;Year 8</option>
            <option value="3">&nbsp;Year 9</option>
            <option value="4">&nbsp;Year 10</option>
            <option value="5">&nbsp;Year 11</option>
            <option value="6">&nbsp;Year 12</option>  
            <!-- Add more options as needed -->
        </select><br>

        <label for="gender">Choose Gender:</label><br>
        <select id="gender" name="gender" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="Male">&nbsp;Male</option>
            <option value="Male">&nbsp;Female</option>
            <!-- Add more options as needed -->
        </select><br>

        <label for="class_teacher">Choose Class teacher:</label><br>
        <select id="class_teacher" name="class_teacher" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="<?php echo $primary_teachers[0]; ?>">&nbsp;<?php echo $primary_teachers[0]; ?></option>
            <option value="<?php echo $primary_teachers[1]; ?>">&nbsp;<?php echo $primary_teachers[1]; ?></option>
            <option value="<?php echo $primary_teachers[2]; ?>">&nbsp;<?php echo $primary_teachers[2]; ?></option>
            <option value="<?php echo $primary_teachers[3]; ?>">&nbsp;<?php echo $primary_teachers[3]; ?></option>
            <option value="<?php echo $primary_teachers[4]; ?>">&nbsp;<?php echo $primary_teachers[4]; ?></option>
            <option value="<?php echo $primary_teachers[5]; ?>">&nbsp;<?php echo $primary_teachers[5]; ?></option>

            <option value="<?php echo $college_teachers[0]; ?>">&nbsp;<?php echo $college_teachers[0]; ?></option>
            <option value="<?php echo $college_teachers[1]; ?>">&nbsp;<?php echo $college_teachers[1]; ?></option>
            <option value="<?php echo $college_teachers[2]; ?>">&nbsp;<?php echo $college_teachers[2]; ?></option>
            <option value="<?php echo $college_teachers[3]; ?>">&nbsp;<?php echo $college_teachers[3]; ?></option>
            <option value="<?php echo $college_teachers[4]; ?>">&nbsp;<?php echo $college_teachers[4]; ?></option>
            <!-- Add more options as needed -->
        </select><br>

        <label for="no_in_class">Number in class:</label><br>
        <input type="text" name="no_in_class" id="no_in_class" placeholder="Eg. 15" required/><br>

        <label for="sub_offered">Number of subjects offered:</label><br>
        <input type="text" name="sub_offered" id="sub_offered" placeholder="Eg. 10" required/><br>

        <input type="submit" name="submit" id="submit" />
    </div>
    </form>
</body>
</html> 