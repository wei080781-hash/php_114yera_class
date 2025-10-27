<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for($i=1 ; $i <= 5 ;$i++){

    for($k=1; $k <=(5-$i);$k++){
        echo "&nbsp;";    
    }
    
    for($j=1 ; $j <= (2*$i-1) ; $j++){
        echo "*";
    }
    echo "<br>";
}
?>
</body>
</html>