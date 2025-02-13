<?php
session_start();

if (!isset($_SESSION['history'])) {
    $_SESSION['history'] = [];
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['clear_history'])) {
        $_SESSION['history'] = [];
    } elseif (isset($_POST['delete_index'])) {
        $index = $_POST['delete_index'];
        if (isset($_SESSION['history'][$index])) {
            array_splice($_SESSION['history'], $index, 1);
        }
    } else {
        $harga_awal = $_POST['harga_awal'];
        $diskon = $_POST['diskon'];
        
        if (is_numeric($harga_awal) && is_numeric($diskon)) {
            $potongan = ($diskon / 100) * $harga_awal;
            $harga_setelah_diskon = $harga_awal - $potongan;
            
            $hasil = "Harga Awal: Rp " . number_format($harga_awal, 2, ',', '.') . ", Diskon: $diskon%, Harga Setelah Diskon: Rp " . number_format($harga_setelah_diskon, 2, ',', '.');
            array_unshift($_SESSION['history'], $hasil);
        } else {
            $error = "Masukkan angka yang valid.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Diskon</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            text-align: center;
            background: linear-gradient(to right, #4facfe, #00f2fe);
            margin: 0;
            padding: 50px;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: rgba(255, 255, 255, 0.95);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            display: flex;
            width: 800px;
            justify-content: space-between;
        }
        .calculator {
            width: 50%;
            text-align: center;
        }
        .history {
            width: 45%;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            font-size: 14px;
            overflow-y: auto;
            max-height: 300px;
        }
        input {
            margin: 10px 0;
            padding: 12px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            background: #ff5e62;
            color: white;
            border: none;
            padding: 12px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #ff9966;
        }
        h3, h4 {
            color: #333;
        }
        .history ul {
            list-style: none;
            padding: 0;
        }
        .history li {
            background: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .delete-btn {
            background: #d9534f;
            border: none;
            padding: 5px 10px;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            font-size: 12px;
        }
        .delete-btn:hover {
            background: #c9302c;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="calculator">
            <h2 style="color: #333;">Kalkulator Diskon</h2>
            <form method="post">
                <label for="harga_awal" style="color: #333;">Harga Awal:</label>
                <input type="text" name="harga_awal" id="harga_awal" required><br>
                
                <label for="diskon" style="color: #333;">Diskon (%):</label>
                <input type="text" name="diskon" id="diskon" required><br>
                
                <button type="submit">Hitung</button>
            </form>
            
            <?php if (isset($harga_setelah_diskon)): ?>
                <h3>Harga Setelah Diskon: Rp <?php echo number_format($harga_setelah_diskon, 2, ',', '.'); ?></h3>
            <?php elseif (isset($error)): ?>
                <p> <?php echo $error; ?> </p>
            <?php endif; ?>
        </div>
        
        <div class="history">
            <h4>Riwayat Perhitungan:</h4>
            <ul>
                <?php foreach ($_SESSION['history'] as $index => $entry): ?>
                    <li>
                        <?php echo $entry; ?>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="delete_index" value="<?php echo $index; ?>">
                            <button type="submit" class="delete-btn">Hapus</button>
                        </form>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</body>
</html>
