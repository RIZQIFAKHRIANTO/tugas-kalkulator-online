
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<html>

<div>
    <h1>Hasil Perhitungan</h1>

    <?php
    // Use $_GET instead of $_get
    $angka1 = isset($_GET['angka1']) ? $_GET['angka1'] : 0;
    $angka2 = isset($_GET['angka2']) ? $_GET['angka2'] : 0;
    $operator = isset($_GET['operator']) ? $_GET['operator'] : '';

    // Initialize $hasil
    $hasil = 0;

    // Use correct syntax for if statements
    if ($operator == '+') {
        $hasil = $angka1 + $angka2;
    } elseif ($operator == '-') {
        $hasil = $angka1 - $angka2;
    } elseif ($operator == '/') {
        // Use '/' for division instead of ':'
        $hasil = $angka1 / $angka2;
    } elseif ($operator == 'x') {
        $hasil = $angka1 * $angka2;
    } else {
        echo "Operator tidak valid.";
    }

    // Display the result
    echo $angka1 . ' ' . $operator . ' ' . $angka2 . ' = ' . $hasil;
    ?>
    <br>
    <a href="index.php">Back</a>
    <button type="button" onclick="window.print();">Cetak</button>
</div>

</body>