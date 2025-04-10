<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h2><marquee behavior="glitch" scrollamount="10">Aplikasi Penghitung Diskon</marquee></h2>
    <div class="kotak1">
        <div class="kotak2">
            <img src="image.png" alt="" class="img">
            <div class="kotak3">
                <form action="proseshitung.php" method="post" class="data">
                    <table class="tabel">
                        <tr class="kolom">
                        <td class="text2">Nama Barang</td>
                        <td class="text2">:</td>
                        <td><input type="text" name="namabarang" id="" class="isi"></td>
                        </tr>

                        <tr class="kolom">
                        <td class="text2">Harga Awal</td>
                        <td class="text2">:</td>
                        <td><input type="text" name="hargaawal" id="" class="isi"></td>
                        </tr>

                        <tr>
                        <td class="text2">Diskon</td>
                        <td class="text2">:</td>
                        <td><input type="text" name="diskon" id="" class="diskon"> %</td>
                        </tr>

                        <tr>
                        <td class="text2">Uang</td>
                        <td class="text2">:</td>
                        <td><input type="text" name="uang" id="" class="isi"></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="Hitung" class="tombol"></td>
                        </tr>

                    </table>
                </form>
        </div>

        <div class="kotak4">
            <h1 class="text-hasil"> Hasil </h1>

            <table class="tabel1">
                <tr>
                    <td class="text2">Nama Barang</td>
                    <td class="text2">:</td>
                    <td class="text2">................ </td>
                </tr>
                <tr>
                    <td class="text2">Harga Awal</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
                <tr>
                    <td class="text2">Diskon</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
                <tr>
                    <td class="text2">Harga Diskon</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
                <tr>
                    <td class="text2">Harga Total</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
                <tr>
                    <td class="text2">Uang</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
                <tr>
                    <td class="text2">Uang Kembalian</td>
                    <td class="text2">:</td>
                    <td class="text2"> ................ </td>
                </tr>
            </table>
        </div>
    
    </div>
</div>
</body>
</html>