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
        <h2>Destinasi Yogyakarta</h2>
        <table>
            <tr>
                <td><b>Tempat</b></td>
                <td><b>Harga</b></td>
            </tr>               
            <hr>
            <tr>
                <td>1. Bukit Bintang</td>
                <td>= Rp. 10.000</td>
            </tr>
            <tr>
                <td>2. Pantai Sadranan</td>
                <td>= Rp. 15.000</td>
            </tr>
            <tr>
                <td>3. Candi Borobudur</td>
                <td>= Rp. 50.000</td>
            </tr>
            <tr>
                <td>4. Candi Prambanan</td>
                <td>= Rp. 50.000</td>
            </tr>
            <tr>
                <td>5. Keraton Yogyakarta</td>
                <td>= Rp. 5.000</td>
            </tr>
            <tr>
                <td>6. Malioboro</td>
                <td>= Rp. 5.000</td>
            </tr>
            <tr>
                <td>7. Pendopo Lawas</td>
                <td>- > cafe</td>
            </tr> 
            <tr>
                <td>8. Goa Pindul </td>
                <td>= Rp. 100.000</td>
            </tr>      
        </table>
            <br>
        <form action="liburan2.php" method="post">
            <label>
                <select name="tempat">
                    <option value="">~ Pilih Destinasi ~</option>
                    <option value="Bukit Bintang">Bukit Bintang</option>
                    <option value="Pantai Sadranan">Pantai Sadranan</option>
                    <option value="Candi Borobudur">Candi Borobudur</option>
                    <option value="Candi Prambanan">Candi Prambanan</option>
                    <option value="Keraton Yogyakarta">Keraton Yogyakarta</option>
                    <option value="Malioboro">Malioboro</option>
                    <option value="Pendopo Lawas">Pendopo Lawas</option>
                    <option value="Goa Pindul">Goa Pindul</option>
                </select>
                <input type="submit" name="submit" value="ok">
            </label>
        </form>
    </center>
</body>
</html>