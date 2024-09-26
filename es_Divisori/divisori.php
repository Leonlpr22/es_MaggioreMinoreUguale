<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        $N = 22;

        echo "<h1>Divisori di $N</h1>";
        echo "<ul>";

        for ($i = 1; $i < $N; $i++) {
            if ($N % $i == 0) {
                echo "<li>$i</li>";
            }
        }

        echo "</ul>";

    ?>

</body>
</html>