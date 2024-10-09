<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
      body {
        font-family: Arial, sans-serif;
      }
      .kalkulator {
        width: 230px;
        height: 250px;
        margin: 50px auto;
        padding: 30px;
        border: 1px solid #ccc;
        border-radius: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color:#cfc1c1;   
     }
      .hasil {
        font-size: 18px;
        font-weight: bold;
        color: #00698f;
      }
    </style>
</head>
<body>
    <div class="kalkulator">
    <h1>KALKULATOR</h1>
    <form method="post" action="">
        Nilai 1 : <input type="number" name="nilai1" /></br>
        Nilai 2 : <input type="number" name="nilai2" /></br>
        <input type="submit" name="tambah" value="+" />
        <input type="submit" name="kurang" value="-" />
        <input type="submit" name="kali" value="*" />
        <input type="submit" name="bagi" value="/" />
    </form>
    <hr>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nilai1 = $_POST['nilai1'];
            $nilai2 = $_POST['nilai2'];
            
            if (isset($_POST['tambah'])) {
                $hasil = $nilai1 + $nilai2;
                echo "Hasil : $hasil";
            } elseif (isset($_POST['kurang'])) {
                $hasil = $nilai1 - $nilai2;
                echo "Hasil : $hasil";
            } elseif (isset($_POST['kali'])) {
                $hasil = $nilai1 * $nilai2;
                echo "Hasil : $hasil";
            } elseif (isset($_POST['bagi'])) {
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                    echo "Hasil : $hasil";
                } else {
                    echo "Error: Pembagian dengan nol!";
                }
            }
        }
        ?>
        </div>
</body>
</html>