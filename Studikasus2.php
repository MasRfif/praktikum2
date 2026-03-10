
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexsadesimal</title>
    <style>
        h1 {
            display: flex;
            justify-content: center;
            text-align: center;
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body>
    <h1>
    <?php

    echo dechex("255");

    echo "<br>";

    $decimalNumber = 255;
    $hexadecimalNumber = dechex($decimalNumber);
    echo "Angka desimal: " . $decimalNumber . "<br>";
    echo "Angka heksadesimal: " . $hexadecimalNumber . "<br>";

    ?>
    </h1>
</body>
</html>


