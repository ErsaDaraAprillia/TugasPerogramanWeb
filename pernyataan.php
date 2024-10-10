<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pernyataan Kondisional</title>
</head>
<body>
    <form action="" method="get">
        Nilai : <input type="number" name="nilai" />
        <input type="submit" value="Proses" />
</form>
 <?php 
$nilai = $_GET['nilai']??NULL;
if($nilai >100){
    echo "Data Anda Tidak Valid";
}elseif($nilai >= 70){
    echo "Lulus Ujian dengan Baik";
}elseif($nilai >=60){
    echo "Lulus Ujian dengan Cukup";
}else{
    echo "Tidak Lulus Ujian";
}
    ?>
</body>
</html>