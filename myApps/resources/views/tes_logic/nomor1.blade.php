<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h3>Soal No.1 </h3>";
            
    //Soal 1
    echo "Segita Siku-siku: ";
    echo "<br>";
    
    for ($x=1; $x<=8; $x++){
        for ($y=1; $y<=$x; $y++){
            echo $y;
        }
        echo "<br>";
    }


    echo "<h3>Soal No.2 </h3>";
            
    //Soal 2
    echo "Segita Siku-siku: ";
    echo "<br>";

    for ($i=1; $i<=5; $i++){
        for ($j=5; $j>=$i; $j-=1){
            print('&nbsp');
        }
        for ($k=1; $k<=$i; $k++){
            echo "*";
        }
        echo "<br/>";
    }
?>
</body>
</html>