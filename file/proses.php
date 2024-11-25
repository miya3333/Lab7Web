<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Hasil</h2>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Input form
            $nama = htmlspecialchars($_POST['nama']);
            $tanggal_lahir = $_POST['tanggal_lahir'];
            $pekerjaan = $_POST['pekerjaan'];

            // Hitung umur
            $tanggal_lahir_date = new DateTime($tanggal_lahir);
            $hari_ini = new DateTime();
            $umur = $hari_ini->diff($tanggal_lahir_date)->y;

            // Gaji
            $gaji = 0;
            switch ($pekerjaan) {
                case 'Programmer':
                    $gaji = 20000000;
                    break;
                case 'UI/UX Desainer':
                    $gaji = 25000000;
                    break;
                case 'App':
                    $gaji = 40000000;
                    break;
            }

            // Hasil
            echo "<p><strong>Nama:</strong> $nama</p>"; 
            echo "<p><strong>Umur:</strong> $umur tahun</p>";
            echo "<p><strong>Pekerjaan:</strong> $pekerjaan</p>";
            echo "<p><strong>Gaji:</strong> Rp " . number_format($gaji, 0, ',', '.') . "</p>";
        } else {
            echo "<p>Data tidak valid.</p>";
        }
        ?>
        <br>
        <a href="../index.html" class="back">Kembali ke Form</a>
    </div>
</body>

</html>