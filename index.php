<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Kalkulator Piksel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="container">
        <h1>Kalkulator Aritmatika</h1>

        <form method="post">
            <input type="number" name="angka1" placeholder="Angka pertama" required>

            <select name="operasi" required>
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">×</option>
                <option value="bagi">÷</option>
            </select>

            <input type="number" name="angka2" placeholder="Angka kedua" required>

            <button type="submit">Hitung</button>
        </form>

        <?php
  // Proses perhitungan
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka1 = $_POST["angka1"];
    $angka2 = $_POST["angka2"];
    $operasi = $_POST["operasi"];
    $hasil = "";

    if ($operasi == "tambah") {
      $hasil = $angka1 + $angka2;
    } elseif ($operasi == "kurang") {
      $hasil = $angka1 - $angka2;
    } elseif ($operasi == "kali") {
      $hasil = $angka1 * $angka2;
    } elseif ($operasi == "bagi") {
      if ($angka2 != 0) {
        $hasil = $angka1 / $angka2;
      } else {
        $hasil = "Tidak bisa dibagi dengan 0!";
      }
    }

    echo "<div class='hasil'>Hasil: <strong>$hasil</strong></div>";
  }
  ?>
    </div>

</body>

</html>