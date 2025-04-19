<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "konto123";
    $dname = "schooldb";

    $conn = new mysqli ($servername, $username, $password, $dname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);

    }else {
        // echo "Connected successfully";
    }
    ?>
</body>
</html>

