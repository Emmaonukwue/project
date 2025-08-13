<?php
include('../request_broadsheet.php');




if (isset($_POST["std_name"]) && isset($_POST["teachercomment"]) ) {
    $std_name = $_POST["std_name"];
    $hteachercomment = $_POST["hteachercomment"];

    $sqltcom = "UPDATE `results` SET `principal_comment` = '$hteachercomment' WHERE `results`.`std_name` = '$std_name';";
    $result3 = $mysqli -> query($sqltcom);
    if($result3) {
        echo "<h2>Headteacher's comment added successfully for $std_name </h2>";
    }
    else {
        echo "<h2>Couldn't add headteacher's comment for $std_name.</h2>";
    }
    
}


?>