<?php

$namabarang=$_POST['namabarang']; //variabel
$hargaawal=$_POST['hargaawal']; //variabel
$diskon=$_POST['diskon'];
$uang=$_POST['uang'];

if($namabarang==""){ //apabila kosong, munculkan pesan
    echo "<script> 
        alert('Nama barang tidak boleh kosong');
        window.location='index3.php';
        </script>";
}elseif($hargaawal==""){ //jika harga kurang dari 0, termasuk 0
    echo "<script> 
        alert('Harga tidak boleh kosong');
        window.location='index3.php';
        </script>";
}elseif($hargaawal<=0){ //jika harga kurang dari 0, termasuk 0
    echo "<script> 
        alert('harga harus lebih dari 0');
        window.location='index3.php';
        </script>";
}elseif($diskon==""){
    echo "<script> 
        alert('Diskon tidak boleh kosong'); 
        window.location='index3.php';
        </script>";
}elseif($diskon>100){ //jika diskon lebih dari 100
    echo "<script> 
        alert('Diskon tidak boleh lebih dari 100%');
        window.location='index3.php';
        </script>"; 
}elseif($uang<=0){ //jika harga uang kurang dari 0, termasuk 0
    echo "<script> 
        alert('Tolong masukkan nominal uang yang lebih dari 0');
        window.location='index3.php';
        </script>";   
}else{ //jika terisi
    $hargadiskon=($diskon/100)*$hargaawal; //rumus
    $hargatotal=$hargaawal-$hargadiskon;
    $kembalian=$uang-$hargatotal;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2><marquee behavior="glitch" scroll-amount="20">Aplikasi Penghitung Diskon</marquee></h2>
<div class="kotak1">
    <div class="kotak2">
        <img src="image.png" alt="" class="img">
        <div class="kotak3">
            <div class="row">
                <form action="proseshitung.php" method="post" class="data">
                    <table clas="tabel">
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
        </div>

        <div class="kotak4">
            <h1 class="text-hasil"> Hasil </h1>

            <table class="tabel1">
                <tr>
                    <td class="text2">Nama Barang</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $namabarang;?> </td>
                </tr>
                <tr>
                    <td class="text2">Harga Awal</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $hargaawal;?> </td>
                </tr>
                <tr>
                    <td class="text2">Diskon</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $diskon;?> % </td>
                </tr>
                <tr>
                    <td class="text2">Harga Diskon</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $hargadiskon;?> </td>
                </tr>
                <tr>
                    <td class="text2">Harga Total</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $hargatotal;?> </td>
                </tr>
                <tr>
                    <td class="text2">Uang</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $uang;?> </td>
                </tr>
                <tr>
                    <td class="text2">Uang Kembalian</td>
                    <td class="text2">:</td>
                    <td class="text2"> <?php echo $kembalian;?> </td>
                </tr>
            </table>
        </div>
    </div>
</div>
    
</body>
</html>