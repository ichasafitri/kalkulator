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
                <form action="proseshitung.php" method="post">
                    <div class="row">
                        <div class="kolom1">
                        <label for="">Harga Awal :</label>

                        </div>
                        <div class="kolom2">
                        <input type="text" name="hargaawal" id="" class="hargaawal">
                        </div>
                    </div>

                    <div class="row">
                        <div class="kolom1">
                        <label for="">Diskon :</label>
                        </div>
                        <div class="kolom2">
                        <input type="text" name="diskon" id="" class="diskon"> %
                        </div>
                    </div>

                    <div class="row">
                        <div class="kolom1">

                        </div>
                        <div class="kolom2">
                        <input type="submit" value="Hitung" class="tombol">
                        </div>
                    </div>
                </form>
            </div>

                <div class="kotak4">
                    <div class="row">
                    <h3 class="text1">Hasil</h3>
                    </div>

                    <div class="row">
                        <div class="kolom1">
                            <p class="text2">Harga awal :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2">.............</p>
                        </div>
                        <div class="kolom1">
                        <p class="text2">Diskon :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2">.............</p>

                        </div>

                        <div class="kolom1">
                        <p class="text2">Harga Diskon :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2">.............</p>

                        </div>

                        <div class="kolom1">
                        <p class="text2">Harga Total :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2">.............</p>

                        </div>
                    </div>
                </div>

        </div>
    
    </div>
</div>
</body>
</html>