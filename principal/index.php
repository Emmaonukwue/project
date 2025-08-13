<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Principal's Home Page</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
        text-align: center;
    }

    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .button {
        display: inline-block;
        padding: 10px 20px;
        margin: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        text-decoration: none;
    }

    .button:hover {
        background-color: #45a049;
    }
</style>
</head>
<body>

<div class="container">
    <div>
        <h1>Welcome to <br>Pinefield Report Principal's Page</h1>
        <p>What would you like to do:</p>
    </div>

    <div class="">
        <h3> View Reports </h3>
        <br>
        <a href="../primary/student_report.php" class="button">Primary</a>
        <a href="../college" class="button">College</a>
    </div>
    <div class="">
        <h3> View Broadsheet </h3>
        <br>
        <a href="../primary/broadsheet.php" class="button">Primary</a>
        <a href="../college/broadsheet.php" class="button">College</a>
    </div>

    <div class="">
        <h3> Load Comments </h3>
        <br>
        <a href="load_pcomment.php" class="button">Load Principal's Comment</a>   </div>
    
</div>

</body>
</html>
