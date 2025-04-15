<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
<body>
    <title>Data Pelajaran</title>
<?php
include "index.php";

$sql = "SELECT mata_pelajaran FROM pelajaran";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>mata Pelajaran</th></tr>"; // Adjusted table header
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['mata_pelajaran'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "tidak ada data.";
}

$conn->close();
?>
    
</body>
</html>
