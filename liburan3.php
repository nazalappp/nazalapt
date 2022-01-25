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

$tiket = $_POST['tiket'];
$hargatiket;

if(isset($_POST['send'])){
    if($tiket == "3"){
        echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
        echo "<b>Selamat Datang Di Bukit Bintang</b><br><br>";
        echo "<table>";
            echo "<tr>";
                echo "<td>Harga Tiket</td>";
                echo "<td>= Rp. $hargatiket ,00 / Tiket</td>";
            echo "</tr>"; 
            echo "<tr>";
                echo "<td>Anda Memesan $tiket Mendapatkan Diskon Sebanyak 5%</td>";
                echo "<td></td>";
            echo "</tr>"; 
            $diskon = (5/100) * $hargatiket;
            echo "<tr>";
                echo "<td>Total Diskon</td>";
                echo "<td>= Rp. $diskon,00</td>";
            echo "</tr>"; 
            $harga = $hargatiket * $tiket;
            echo "<tr>";
                echo "<td>Total Harga Normal</td>";
                echo "<td>= Rp. $harga,00</td>";
            echo "</tr>"; 
            $bayar = $harga - $diskon;
            echo "<tr>";
                echo "<td>Total Bayar</td>";
                echo "<td>= Rp. $bayar,00</td>";
            echo "</tr>"; 
        echo "</table>";
        
    }
    else if($tiket == "4"){
        echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
        echo "<b>Selamat Datang Di Bukit Bintang</b><br><br>";
        echo "<table>";
            echo "<tr>";
                echo "<td>Harga Tiket</td>";
                echo "<td>= Rp. 10.000,00 / Tiket</td>";
            echo "</tr>"; 
            echo "<tr>";
                echo "<td>Anda Memesan $tiket Mendapatkan Diskon Sebanyak 7%</td>";
                echo "<td></td>";
            echo "</tr>"; 
            $diskon = (7/100) * 10000;
            echo "<tr>";
                echo "<td>Total Diskon</td>";
                echo "<td>= Rp. $diskon,00</td>";
            echo "</tr>"; 
            $harga = 10000 * $tiket;
            echo "<tr>";
                echo "<td>Total Harga Normal</td>";
                echo "<td>= Rp. $harga,00</td>";
            echo "</tr>"; 
            $bayar = $harga - $diskon;
            echo "<tr>";
                echo "<td>Total Bayar</td>";
                echo "<td>= Rp. $bayar,00</td>";
            echo "</tr>"; 
        echo "</table>";    
    }
    else if($tiket == "5"){
        echo "<h2>Destinasi Yogyakarta</h2><hr><br>";
        echo "<b>Selamat Datang Di Bukit Bintang</b><br><br>";
        echo "<table>";
            echo "<tr>";
                echo "<td>Harga Tiket</td>";
                echo "<td>= Rp. 10.000,00 / Tiket</td>";
            echo "</tr>"; 
            echo "<tr>";
                echo "<td>Anda Memesan $tiket Mendapatkan Diskon Sebanyak 10%</td>";
                echo "<td></td>";
            echo "</tr>"; 
            $diskon = (10/100) * 10000;
            echo "<tr>";
                echo "<td>Total Diskon</td>";
                echo "<td>= Rp. $diskon,00</td>";
            echo "</tr>"; 
            $harga = 10000 * $tiket;
            echo "<tr>";
                echo "<td>Total Harga Normal</td>";
                echo "<td>= Rp. $harga,00</td>";
            echo "</tr>"; 
            $bayar = $harga - $diskon;
            echo "<tr>";
                echo "<td>Total Bayar</td>";
                echo "<td>= Rp. $bayar,00</td>";
            echo "</tr>"; 
        echo "</table>";
    }
}
?>
    </center>
</body>
</html>