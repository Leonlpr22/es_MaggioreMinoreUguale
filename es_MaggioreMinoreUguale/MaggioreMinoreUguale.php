<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

        $x = rand(0, 42);
        $y = rand(0, 42);

        if ($x > $y) {
            echo "<h1>x ($x) è maggiore di y ($y)</h1>";
            $max = $x;
        } else if ($x < $y) {
            echo "<h1>x ($x) è minore di y ($y)</h1>";
            $max = $y;
        } else {
            echo "<h1>x ($x) è uguale a y ($y)</h1>";
            $max = $x;
        }

        if ($max < 10) {
            echo "<p>$max è minore di 10</p>";
        } else if ($max >= 10 && $max <= 20) {
            echo "<p>$max è compreso tra 10 e 20</p>";
        } else if ($max >= 21 && $max <= 30) {
            echo "<p>$max è compreso tra 21 e 30</p>";
        } else {
            echo "<p>$max è maggiore di 30</p>";
        }

    ?>


</body>

</html>