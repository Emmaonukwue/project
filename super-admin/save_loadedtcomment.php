<?php
include('../request_broadsheet.php');




if (isset($_POST["std_name"]) && isset($_POST["teachercomment"]) ) {
    $std_name = $_POST["std_name"];
    $teachercomment = $_POST["teachercomment"];

    $sqltcom = "UPDATE `results` SET `class_teacher_comment` = '$teachercomment' WHERE `results`.`std_name` = '$std_name';";
    $result3 = $mysqli -> query($sqltcom);
    if($result3) {
        echo "<h2>Class teacher's comment added successfully for $std_name </h2><br>";
        
        echo "<button onclick=\"history.go(-1);\">Back </button>";
    }
    else {
        echo "<h2>Couldn't add class teacher's comment for $std_name.</h2>";
    }
    
}


?>