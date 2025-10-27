<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{

            font-family:'Courier New', Courier, monospace
        }
    </style>
</head>
<body>
<?php
for($i=0;$i<7;$i++){
    for($j=0;$j<7;$j++){
        if($i==0||$i==6 || $j==0||$j==6){

            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

echo "<hr>";

for($i=0;$i<5;$i++){

        for($j=5;$j>$i;$j--){
            echo "*";
        }
        echo "<br>";
        }
?>
</body>
</html>