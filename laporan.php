<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Laporan: Array dan Loop di PHP</h1>
    <section>
        <h2>Array</h2>
        <p>Array adalah struktur data yang dapat menyimpan banyak nilai dalam satu variabel. Di PHP, array dapat berupa array numerik, asosiatif, atau multidimensi.</p>
        <p>Array numerik menggunakan indeks angka untuk mengakses elemen, contohnya:</p>
        <pre>
        <?php
        $angka = [10, 20, 30];
        echo $angka[0]; // Output: 10
        ?>
        </pre>
        <p>Array asosiatif menggunakan kunci berupa string untuk mengakses elemen, contohnya:</p>
        <pre>
        <?php
        $data = ["nama" => "John", "usia" => 25];
        echo $data["nama"]; // Output: John
        ?>
        </pre>
        <p>Array multidimensi adalah array yang berisi array lain sebagai elemennya, contohnya:</p>
        <pre>
        <?php
        $mahasiswa = [
            ["nama" => "Alice", "usia" => 20],
            ["nama" => "Bob", "usia" => 22]
        ];
        echo $mahasiswa[0]["nama"]; // Output: Alice
        ?>
        </pre>
        <h3>Contoh Array</h3>
        <pre>
        <?php
        // Array numerik
        $buah = ["Apel", "Jeruk", "Mangga"];
        print_r($buah);

        // Array asosiatif
        $hargaBuah = ["Apel" => 10000, "Jeruk" => 15000, "Mangga" => 20000];
        print_r($hargaBuah);
        ?>
        </pre>
    </section>
    <section>
        <h2>Loop</h2>
        <p>Loop digunakan untuk menjalankan blok kode berulang kali. PHP mendukung beberapa jenis loop seperti <code>for</code>, <code>while</code>, <code>do-while</code>, dan <code>foreach</code>.</p>
        <p>Loop <code>for</code> digunakan ketika jumlah iterasi sudah diketahui, contohnya:</p>
        <pre>
        <?php
        for ($i = 2; $i <= 3; $i++) {
            echo "Iterasi ke-$i<br>";
        }
        ?>
        </pre>
        <p>Loop <code>while</code> digunakan ketika kondisi harus dipenuhi sebelum iterasi, contohnya:</p>
        <pre>
        <?php
        $x = 1;
        while ($x <= 3) {
            echo "Nilai: $x<br>";
            $x++;
        }
        ?>
        </pre>
        <p>Loop <code>do-while</code> mirip dengan <code>while</code>, tetapi selalu menjalankan blok kode setidaknya sekali, contohnya:</p>
        <pre>
        <?php
        $y = 1;
        do {
            echo "Nilai: $y<br>";
            $y++;
        } while ($y <= 3);
        ?>
        </pre>
        <p>Loop <code>foreach</code> dirancang khusus untuk iterasi pada array, contohnya:</p>
        <pre>
        <?php
        $buah = ["Apel", "Jeruk", "Mangga"];
        foreach ($buah as $item) {
            echo "Buah: $item<br>";
        }
        ?>
        </pre>
        <pre>
        <?php
        for ($i = 40; $i <=50; $i++) {
            echo "halooo woorrldd - $i<br>";
            
        }
        ?>
        </pre> 
        <?php
    
    $datasiswa = [["kika","Bhs.indonesia", "69"],
        ["kika","Bhs.inggris", "70"],
        ["kika","Matematika", "80"],
        ["kika","IPA", "90"],
        ["kika","IPS", "100"],
        ["kika","Pendidikan Agama", "100"],
        ["kika","Pendidikan Pancasila", "100"],
        ["kika","Kewarganegaraan", "100"],
        ["kika","Bahasa Daerah", "100"],
        ["kika","Seni Budaya", "100"],
        ["kika","Olahraga", "100"],
    ];
    for () {
 

    }   

        ?>
        </pre>
    </section>
</body>
</html>