<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php

        $num = rand(1,22);
        if($num %2 == 0){
            echo "il numero $num è pari";
        } else {
            echo "il numero $num è dispari";
        }

    ?>
    
</body>
</html>