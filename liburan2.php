<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<?php
        $pilih = $_POST['tempat'];
        
        if(isset($_POST['submit'])){
            if($pilih == "Bukit Bintang"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Bukit Bintang</b><br><br>";
                $hargatiket = 10000;
                echo "Harga Tiket = Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Pantai Sadranan"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Pantai Sadranan</b><br><br>";
                $hargatiket = 15000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Candi Borobudur"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Candi Borobudur</b><br><br>";
                $hargatiket = 50000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Candi Prambanan"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Candi Prambanan</b><br><br>";
                $hargatiket = 50000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Keraton Yogyakarta"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Keraton Yogyakarta</b><br><br>";
                $hargatiket = 5000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Malioboro"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Malioboro</b><br><br>";
                $hargatiket = 5000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
            else if($pilih == "Pendopo Lawas"){
                echo "<b>Pendopo Lawas</b>";
            }
            else if($pilih == "Goa Pindul"){
                echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
                echo "<b>Selamat Datang Di Goa Pindul</b><br><br>";
                $hargatiket = 100000;
                echo "Harga Rp. $hargatiket,00 / tiket";
            }
        }
        ?>
        <br><br>
    <form action="liburan3.php" method="post">
        <label>
            <input type="number" name="tiket" placeholder="Jumlah Tiket...">
            <input type="submit" name="send" value="ok">
        </label>
    </form>
</center>
</body>
</html>