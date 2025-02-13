<?php

$hargaawal=$_POST['hargaawal']; //variabel
$diskon=$_POST['diskon'];

if($hargaawal==""){ //apabila kosong, munculkan pesan
    echo "<script> 
        alert('Harga tidak boleh kosong');
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
}elseif($hargaawal<=0){ //jika harga kurang dari 0, termasuk 0
    echo "<script> 
        alert('harga harus lebih dari 0');
        window.location='index3.php';
        </script>";   
}else{ //jika terisi
    $hargadiskon=($diskon/100)*$hargaawal; //rumus
    $hargatotal=$hargaawal-$hargadiskon;
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
                    <table>
                        <tr>
                            <td class="text2">Harga Awal</td>
                            <td>:</td>
                            <td><?php echo $hargaawal; ?></td>
                        </tr>
                    </table>
                    <div class="row">
                    <h3 class="text1">Hasil</h3>
                    </div>

                    <div class="row">
                        <div class="kolom1">
                            <p class="text2">Harga awal :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2"><?php echo $hargaawal; ?></p>
                        </div>
                        <div class="kolom1">
                        <p class="text2">Diskon :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2"><?php echo $diskon; ?></p>

                        </div>

                        <div class="kolom1">
                        <p class="text2">Harga Diskon :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2"><?php echo $hargadiskon; ?></p>

                        </div>

                        <div class="kolom1">
                        <p class="text2">Harga Total :</p>
                        </div>
                        <div class="kolom2">
                        <p class="text2"><?php echo $hargatotal; ?></p>

                        </div>
                    </div>
                </div>

        </div>
    
    </div>

    <h4>Harga Awal : Rp. </h4> 
    <h4>Diskon : </h4>
    <h4>Harga Diskon : Rp. </h4>
    <h4>Harga yang Harus dibayar : Rp. </h4>
</body>
</html>