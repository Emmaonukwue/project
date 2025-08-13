<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Load Student Scores</title>
	<style type="text/css">
.auto-style1 {
	text-align: center;
}
</style>
<?php include("../functions.php"); ?>
</head>
<h1 class="auto-style1">Admin Load Student Scores Form</h1>
<body bgcolor="green">
    <div><h2 class="auto-style1">Pinefield Schools Lekki</h2></div>
    <form action="save_loadedscores.php" method="POST">
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
        

        <label for="subject">Subject:</label><br>
        <select id="subject" name="subject" class="auto-style2" style="width: 136px; height: 28px" required>
            <option value="eng">&nbsp;English</option>
            <option value="math">&nbsp;Mathematics</option>
            <option value="sci">&nbsp;Science</option>
            <option value="geo">&nbsp;Geography</option>
            <option value="pshe">&nbsp;PSHE</option>
            <option value="re">&nbsp;Religious Education</option>
            <option value="his">&nbsp;History</option>
            <option value="com">&nbsp;Computing</option>
            <option value="art">&nbsp;Art</option>
            <option value="civ">&nbsp;Civic Education</option>
            <option value="bus">&nbsp;Business Studies</option>
            <option value="fre">&nbsp;French</option>  
            <option value="bib">&nbsp;Biblical Studies</option>
            <option value="phy">&nbsp;Physics</option>
            <option value="bio">&nbsp;Biology</option>
            <option value="chem">&nbsp;Chemistry</option>
            <option value="fmath">&nbsp;Further Maths</option>
            <option value="econ">&nbsp;Economics</option>
            <option value="acc">&nbsp;Accounting</option> 
            <option value="lit">&nbsp;Literature</option> 
            <!-- Add more options as needed -->
        </select><br>

        <label for="score1">First score (10):</label><br>
        <input type="text" name="score1" id="score1" placeholder="Eg. 8" /><br>
<br>
        <label for="score2">Second score (20):</label><br>
        <input type="text" name="score2" id="score2" placeholder="Eg. 8" /><br>

        

        <input type="submit" name="submit" id="submit" />
    </div>
    </form>
</body>
</html> 