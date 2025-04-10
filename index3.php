<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
   <h2><marquee behavior="glitch" direction="10">Aplikasi penghitung diskon</marquee></h2>
   <div class="kotak1">
    <div class="kotak2">
        <img src="image.png" alt="" class="img">
        <div class="kotak3">
            <div class="row">
                <form action="proseshitung2.php" method="post" class="data">
                    <table class="table">
                        <tr class="kolom">
                            <td class="text2">hargaawal</td>
                            <td class="text2">:</td>
                            <td><input type="text" name="hargaawal" id="" class="isi"></td>
                        </tr>
                        <tr class="kolom">
                            <td class="text2">diskon</td>
                            <td class="text2">:</td>
                            <td><input type="text" name="diskon" id="" class="diskon">%</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td><input type="submit" value="hitung" class="tombol"></td>
                        </tr>

                    </table>

                </form>

            </div>

        </div>
        <div class="kotak4">
            <h1 class="text1">hasil</h1>
            <table class="table">
                <tr>
                    <td class="text2">harga awal</td>
                    <td class="text2">:</td>
                    <td class="text2">............</td>
                </tr>
                <tr>
                    <td class="text2">diskon</td>
                    <td class="text2">:</td>
                    <td class="text2">...........</td>
                </tr>
                <tr>
                    <td class="text2">harga diskon</td>
                    <td class="text2">:</td>
                    <td class="text2">...........</td>
                </tr>
                <tr>
                    <td class="text2">harga total</td>
                    <td class="text2">:</td>
                    <td class="text2">...........</td>
                </tr>



            </table>

        </div>

    </div>

   </div>
</body>
</html>