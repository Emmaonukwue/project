<?php

session_start();

// Retrieve $_POST values from session variables
if (isset($_SESSION['post_data'])) {
    $post_data = $_SESSION['post_data'];
    // Use $post_data as needed
    $std_name = $_POST["std_name"];
    $classname = $_POST["class"];
    
    if ($classname == 7 || $classname == 8) {
        header("Location: college_report.php");
            exit();
    } else if ($classname == 9) {
        header("Location: college_report.php");
            exit();
    } else if ($classname == 10) {
        header("Location: year10_report.php");
            exit();
    }else {
        header("Location: college_report.php");
            exit();
    }
    
} else {
    // Handle case where $_POST values are not available
    echo "there was a problem";
}

// Unset or destroy the session variable if needed
unset($_SESSION['post_data']);
// OR
// session_destroy();




?>