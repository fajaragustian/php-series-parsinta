<?php
// Variables in php
$name = "John";
// Apapun yang ingin di tampilkan harus di echo
echo $name;
echo '<br>';
// Konstanation
$name = "John";
echo 'Nama saya ' . $name . ' dan saya sedang belajar PHP';
echo    "<br>";
// Berbeda method penulisan
echo "Nama saya  {$name} dan saya sedang belajar PHP";
echo    "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Series</title>
</head>

<body>
    Nama saya <?php echo $name; ?>
    <br>
    <!-- berbeda penulisan  -->
    Nama saya <?= $name; ?>
</body>

</html>