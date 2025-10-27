<style>
        *{

            font-family:'Courier New', Courier, monospace
        }
    </style>
<h2>十字菱形(保留外框)</h2>
<?php

$x=10;
$y=0;

if($x%2==0){
    $x=$x+1;
}

$center = floor($x/2); // 算出中心點位置

for($i=0; $i<$x; $i++){
    if($i>floor($x/2)){
        $y=$y-1;
    }else{
        $y=$i;
    }

    // 印出左邊的空格
    for($k=0; $k<floor($x/2)-$y; $k++){
        echo "&nbsp;";
    }

    // 印出這一行的星號或空格
    for($j=0; $j<2*$y+1; $j++){
        // 判斷是否要印星號:
        // 1. 菱形邊界 (第一個或最後一個位置)
        // 2. 水平中線 (中間那一列)
        // 3. 垂直中線 (每列的中間位置)
        if($j == 0 || $j == 2*$y || $i == $center || $j == $y){
            echo "*";
        }else{
            echo "&nbsp;";
        }
    }
    echo "<br>";
}

?>

