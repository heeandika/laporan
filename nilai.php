
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <table>
        <caption><h1>Data Nilai</h1></caption>
        <tr>
            <th>Nilai</th>
        </tr>
        <?php
        include "index.php";
        
        $sql = "SELECT nilai FROM nilai";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['nilai'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Tidak ada data";
        }
        $conn->close();
?>
        
    </table>
</body>
</html>

<?php

