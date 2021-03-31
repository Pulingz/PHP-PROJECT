<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cuaca="Hujan";

        if($cuaca=="Hujan"){ //kondisi
            echo"Saya membawa payung"; //pernyataan
        } else if($cuaca=="Mendung"){
            echo"Saya membawa mantel";
        } else if($cuaca=="Banjir"){
            echo"Saya lewat jalur alternatif";
        }else{
            echo"Cuaca hari ini sangat cerah";
        }
    ?>
    
</body>
</html>