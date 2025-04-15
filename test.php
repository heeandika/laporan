<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gacha System</title>
    <style>
        /* CSS untuk animasi */
        .result {
            font-size: 1.5em;
            font-weight: bold;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            text-align: center;
        }
        .result.show {
            opacity: 1;
        }
        /* Responsivitas */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
        }
        form {
            margin-bottom: 20px;
        }
        button {
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
        }
        #skipButton {
            display: none;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <!-- Form untuk memulai gacha -->
    <form method="POST" id="gachaForm">
        <button type="submit" name="gacha">Mulai Gacha</button>
        <button type="button" id="skipButton">Skip</button>
    </form>

    <!-- Elemen untuk menampilkan hasil -->
    <p id="result" class="result"></p>

    <!-- Elemen audio -->
    <audio id="gachaAudio" src="gacha-start.mp3"></audio>
    <audio id="resultAudio" src="gacha-result.mp3"></audio>

    <?php
    // Logika gacha dengan tier dan drop rate
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['gacha'])) {
        $items = [
            ['name' => 'Item S', 'tier' => 'S', 'rate' => 0.5],
            ['name' => 'Item A', 'tier' => 'A', 'rate' => 2],
            ['name' => 'Item B', 'tier' => 'B', 'rate' => 7.5],
            ['name' => 'Item C', 'tier' => 'C', 'rate' => 15],
            ['name' => 'Item D', 'tier' => 'D', 'rate' => 25],
            ['name' => 'Item E', 'tier' => 'E', 'rate' => 30],
            ['name' => 'Item F', 'tier' => 'F', 'rate' => 20],
        ];

        // Fungsi untuk memilih item berdasarkan drop rate
        function getGachaResult($items) {
            $random = mt_rand(1, 10000) / 100; // Angka acak 0.01 - 100.00
            $cumulativeRate = 0;

            foreach ($items as $item) {
                $cumulativeRate += $item['rate'];
                if ($random <= $cumulativeRate) {
                    return $item;
                }
            }
            return null; // Jika tidak ada yang cocok (fallback)
        }

        $resultItem = getGachaResult($items);
        $result = $resultItem ? "{$resultItem['name']} (Tier {$resultItem['tier']})" : "Tidak ada item";
        echo "<script>var gachaResult = '$result';</script>";
    }
    ?>

    <script>
        // JavaScript untuk efek jeda, animasi, fitur skip, dan audio
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('gachaForm');
            const resultElement = document.getElementById('result');
            const skipButton = document.getElementById('skipButton');
            const gachaAudio = document.getElementById('gachaAudio');
            const resultAudio = document.getElementById('resultAudio');
            let timeout;

            form.addEventListener('submit', function (e) {
                e.preventDefault(); // Mencegah submit form langsung
                resultElement.classList.remove('show');
                resultElement.textContent = 'Mengundi...';
                skipButton.style.display = 'inline-block'; // Tampilkan tombol skip

                // Putar audio gacha
                gachaAudio.currentTime = 0;
                gachaAudio.play();

                timeout = setTimeout(() => {
                    if (typeof gachaResult !== 'undefined') {
                        resultElement.textContent = `Selamat! Anda mendapatkan: ${gachaResult}`;
                        resultElement.classList.add('show');
                        skipButton.style.display = 'none'; // Sembunyikan tombol skip

                        // Putar audio hasil
                        resultAudio.currentTime = 0;
                        resultAudio.play();
                    }
                }, 2000); // Jeda 2 detik
            });

            skipButton.addEventListener('click', function () {
                clearTimeout(timeout); // Hentikan jeda
                if (typeof gachaResult !== 'undefined') {
                    resultElement.textContent = `Selamat! Anda mendapatkan: ${gachaResult}`;
                    resultElement.classList.add('show');
                    skipButton.style.display = 'none'; // Sembunyikan tombol skip

                    // Putar audio hasil
                    resultAudio.currentTime = 0;
                    resultAudio.play();
                }
            });
        });
    </script>
</body>
</html>