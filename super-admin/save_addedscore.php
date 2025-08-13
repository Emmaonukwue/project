<?php
include('../request_broadsheet.php');



if (isset($_POST["std_name"]) && isset($_POST["class"]) && isset($_POST["gender"]) && isset($_POST["class_teacher"]) && isset($_POST["no_in_class"]) && isset($_POST["sub_offered"]) ) {
    $std_name = $_POST["std_name"];
    $class = $_POST["class"];
    $gender = $_POST["gender"];
    $class_teacher = $_POST["class_teacher"];
    $no_in_class = $_POST["no_in_class"];
    $sub_offered = $_POST["sub_offered"];

    $sql = "INSERT INTO `results` (`std_name`, `class`, `gender`, `class_teacher`, `no_in_class`, `sub_offered`
    `english_name`, `english_mark_1`, `english_mark_2`, `math_name`, `math_mark_1`, `math_mark_2`, `sci_name`, `sci_mark_1`, `sci_mark_2`, `geo_name`, `geo_mark_1`, `geo_mark_2`, 
    `pshe_name`, `pshe_mark_1`, `pshe_mark_2`, `re_name`, `re_mark_1`, `re_mark_2`, `his_name`, `his_mark_1`, `his_mark_2`, `com_name`, `com_mark_1`, `com_mark_2`, `art_name`, `art_mark_1`, `art_mark_2`,
    `civ_name`, `civ_mark_1`, `civ_mark_2`, `bus_name`, `bus_mark_1`, `bus_mark_2`, `fre_name`, `fre_mark_1`, `fre_mark_2`, 
    `bib_name`, `bib_mark_1`, `bib_mark_2`, `phy_name`, `phy_mark_1`, `phy_mark_2`, `bio_name`, `bio_mark_1`, `bio_mark_2`, `chem_name`, `chem_mark_1`, `chem_mark_2`, `fmath_name`, `fmath_mark_1`, `fmath_mark_2`,
    `econ_name`, `econ_mark_1`, `econ_mark_2`, `acc_name`, `acc_mark_1`, `acc_mark_2` ) 
    VALUES ('$std_name', '$class', '$gender', '$class_teacher', '$no_in_class', '$sub_offered', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13',
    '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13','$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13', '$s13'    )";

    $result = $mysqli -> query($sql);
    if($result) {
        echo "<h2>Student added successfully</h2><br>";
        
        echo "<button onclick=\"history.go(-1);\">Back </button>";
    }
    else {
        echo "Error occurred";
    }
}
?>

