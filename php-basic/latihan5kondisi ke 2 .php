<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $angka=1;

    switch($angka){
        case 0:
            echo"Angka Nol";
            break;

        case 1:
            echo"angka satu";
            break;
        case 2:
             echo"angka dua";
             break;
        default:
            echo"angka tidak terdaftar";
    }
    ?>
    
</body>
</html>