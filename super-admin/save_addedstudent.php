<?php
include('../request_broadsheet.php');



if (isset($_POST["std_name"]) && isset($_POST["class"]) && isset($_POST["gender"]) && isset($_POST["class_teacher"]) && isset($_POST["no_in_class"]) && isset($_POST["sub_offered"]) ) {
    $std_name = $_POST["std_name"];
    $class = $_POST["class"];
    $gender = $_POST["gender"];
    $class_teacher = $_POST["class_teacher"];
    $no_in_class = $_POST["no_in_class"];
    $sub_offered = $_POST["sub_offered"];

    $sql = "INSERT INTO `results` (`std_name`, `class`, `gender`, `class_teacher`, `no_in_class`, `sub_offered`) VALUES ('$std_name', '$class', '$gender', '$class_teacher', '$no_in_class', '$sub_offered')";

    $result = $mysqli -> query($sql);
    if($result) {
        echo "<h2>Student added successfully</h2>";
    }
    else {
        echo "Error occurred";
    }
}
?>