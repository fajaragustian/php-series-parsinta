<?php
// Menggunakan While
// $x = 1;
// Jika perulangan lebih  besar dari sama dengan 32 maka akan terus di ulang mulai dari (lebih dari 32) 33 hingga tidak ditentukan
// while ($x >= 32) {
// Jika perulangan lebih kecil dari sama dengan 32 maka akan terus di ulang hingga 32
// while ($x <= 32) {
//     echo "The number is: $x <br>";
//     // jika tidak menggunakan $x++ maka akan terjadi infinite loop
//     $x++;
// }

// Menggunakan For
// for ($x = 1; $x <= 32; $x++) {
//     echo "The number is: $x <br>";
// }
?>
<!-- Penggunan For dalam HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>

<body>
    <div>
        Tanggal :
        <select name="tanggal" id="tanggal">
            <!-- Cara biasa  -->
            <!-- <?php
                    for ($x = 1; $x <= 31; $x++) {
                        // Menggunakan konstanetion
                        // echo '<option value=' . $x . '>' . $x . '</option>';
                        // 
                        echo "<option value='{$x}'>{$x}</option>";
                    }
                    ?> -->
            <!-- Cara spesial -->
            <!-- Menggunakan shortcut dan bisa menggunakan tag html langsung tanpa echo -->
            <?php for ($x = 1; $x <= 31; $x++) : ?>
                <option value="<?= $x; ?>"><?= $x; ?></option>
            <?php endfor; ?>
        </select>
        <br>
        Bulan &nbsp;:
        <select name="bulan" id="bulan">
            <!-- Cara spesial -->
            <!-- Menggunakan shortcut dan bisa menggunakan tag html langsung tanpa echo -->
            <?php for ($x = 1; $x <= 12; $x++) : ?>
                <option value="<?= $x; ?>"><?= $x; ?></option>
            <?php endfor; ?>
        </select>
        <br>
        Tahun &nbsp;:
        <select name="tahun" id="tahun">
            <!-- Cara spesial -->
            <!-- Menggunakan shortcut dan bisa menggunakan tag html langsung tanpa echo -->
            <!-- for ($x = 1999; $x <= 2018; $x++)  -->
            <?php for ($x = 1999; $x <= date("Y"); $x++) : ?>
                <option value="<?= $x; ?>"><?= $x; ?></option>
            <?php endfor; ?>
        </select>
    </div>
</body>

</html>