<!-- assigment operator -->
<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    echo $x;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $x += 21;

    echo $x;
    ?>

</body>

</html>

<!-- comperasion opertator -->
<?php
$x = 12;
$y = "12";

var_dump($x == $y);
?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <!DOCTYPE html>
    <html>

    <body>

    <!-- Operator Aritmatika -->
    <?php
    $x = 12;
    $y = 21;

    echo $x + $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $y = 21;

    echo $x - $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $y = 21;

    echo $x * $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $y = 21;

    echo $x * $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $y = 21;

    echo $x / $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 12;
    $y = 21;

    echo $x % $y;
    ?>

</body>

</html>

<!DOCTYPE html>
<html>

<body>

    <?php
    $x = 21;
    $y = 12;

    echo $x ** $y;
    ?>

</body>

</html>

<?php
$x = 12;
$y = 21;

// **Operator Penugasan**
// Note: Menambahkan nilai ke variabel
echo "Nilai x: $x<br>"; // Hasil: 12
$x = 12;
$x += 21;
echo "Nilai x setelah penugasan: $x<br>"; // Hasil: 33

// **Operator Perbandingan**
// Note: Membandingkan nilai dua variabel
$x = 12;
$y = "12";
echo "Apakah x sama dengan y? ";
var_dump($x == $y); // Hasil: bool(true)

// **Operator Aritmatika**
// Note: Melakukan operasi matematika
echo "Hasil penjumlahan x dan y: ";
echo $x + $y; // Hasil: 33
echo "<br>";

echo "Hasil pengurangan x dan y: ";
echo $x - $y; // Hasil: -9
echo "<br>";

echo "Hasil perkalian x dan y: ";
echo $x * $y; // Hasil: 252
echo "<br>";

echo "Hasil pembagian x dan y: ";
echo $x / $y; // Hasil: 0.57142857142857
echo "<br>";

echo "Hasil modulus x dan y: ";
echo $x % $y; // Hasil: 12
echo "<br>";

echo "Hasil pangkat x dan y: ";
echo $x ** $y; // Hasil: 1.2089258196146E+25
echo "<br>";
?>