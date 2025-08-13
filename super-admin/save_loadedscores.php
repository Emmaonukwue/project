<?php
include('../request_broadsheet.php');


if (isset($_POST["std_name"]) && isset($_POST["subject"]) ) {
   
        $std_name = $_POST["std_name"];
        $subject = $_POST["subject"];
        $number1 = "_1";
        $number2 = "_2";
        $score1_name = $_POST["subject"].$number1;
        $score2_name = $_POST["subject"].$number2;
        $score1 = $_POST["score1"];
        $score2 = $_POST["score2"];

        $sqlscores = "UPDATE `results` SET `$score1_name` = '$score1', `$score2_name` = '$score2' WHERE `results`.`std_name` = '$std_name';";
        $result2 = $mysqli -> query($sqlscores);
        if($result2) {
            echo "<h2>Scores added successfully to  $subject  for $std_name.</h2>";
        }
        else {
            echo "<h2>Couldn't add scores to $subject</h2>";
        }
    
}

?>