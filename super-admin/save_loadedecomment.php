<?php
include('../request_broadsheet.php');




if (isset($_POST["std_name"]) && isset($_POST["subcomment"]) ) {
    $std_name = $_POST["std_name"];
    $subject = $_POST["subject"];
    $subcomment = $_POST["subcomment"];

    $sqltcom = "UPDATE `results` SET `$subject` = '$subcomment' WHERE `results`.`std_name` = '$std_name';";
    $result3 = $mysqli -> query($sqltcom);
    if($result3) {
        echo "<h2>Subject comment added successfully to $subject for $std_name </h2><br>";
        
        echo "<button onclick=\"history.go(-1);\">Back </button>";
    }
    else {
        echo "<h2>Couldn't add subject comment for $std_name.</h2>";
    }
    
}


?>