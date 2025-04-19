<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Data Siswa</title>
        <h1>MENU</h1>
        <div class="menu-buttons">
        <button><a href="swap.php">menu</a></button>
        <button><a href="pelajaran.php">pelajaran</a></button>
        <button><a href="nilai.php">nilai</a></button>
        <button><a href="gabungan.php">gabungan</a></button>
    </div>
    <style>
    h1 {
        color: black;
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 20px;
    }
    body {
        font-family: Arial, sans-serif;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        margin: 0;
        background: linear-gradient(90deg, blue, white, black);
            background-size: 300% 300%;
            animation: moveBackground 5s linear infinite;
        }
        @keyframes moveBackground {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
        box-shadow: 0 4px 8px rgba(90, 90, 90, 0.1);
        background-color: white;
    }
    th, td {
        border: 1px solid gray;
        padding: 12px;
        text-align: center;
    }
    th {
        background-color: black;
        color: white;
        font-weight: bold;
    }
    td {
        background-color: #f8f8f8;
    }
    td:hover {
        background-color: #e0e0e0;
    }
    a {
        text-decoration: none;
        color: black;
        font-weight: bold;
        margin: 10px 0;
        display: inline-block;
        color: #76A9D0  ;

    }
    a:hover {
        color: #B3D2E9 ;
    }
    button {
        background-color: black;
        color: white;
        border: none;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border-radius: 5px;
        font-size: 1rem;
    }
    button:hover {
        background-color: #1A5480;
    }
    .menu-buttons {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-bottom: 20px;
    }
    caption {
        margin-bottom: 30px;
    }
    
</style>
</head> 
<body>
    <table>
        <caption><h1>Data Siswa</h1></caption>
        <tr>
            <th>id</th>
            <th>nisn</th>
            <th>Nama</th>
            <th>gendre</th>
            <th>place_of_born</th>
            <th>date_of_born</th>
            <th>address</th>
            <th>Actions</th>
        </tr>
        <?php
        include "index.php";
        
        $sql = "SELECT * FROM siswa";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['nisn'] . "</td>";
                echo "<td>" . $row['nama'] . "</td>";
                echo "<td>" . $row['gendre'] . "</td>";
                echo "<td>" . $row['place_of_born'] . "</td>";
                echo "<td>" . $row['date_of_born'] . "</td>";
                echo "<td>" . $row['address'] . "</td>";
                echo "<td>
                        <form method='POST' action='siswa_action.php' style='display:inline-block;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <button type='submit' name='action' value='delete'>Hapus</button>
                        </form>
                        <form method='POST' action='siswa_edit.php' style='display:inline-block;'>
                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                            <button type='submit'>Edit</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
        }
        $conn->close();
        ?>
    </table>
</body>
</html>
