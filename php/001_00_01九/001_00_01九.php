<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>九九乘法表</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>🔢 九九乘法表</h1>
    <div class="table-container">
        <table>
<?php
for($i=1; $i<=10; $i++){
        echo "<tr>";
        for($j=1; $j<=10; $j++){
            if($i==1 && $j==1){
                echo "<td>×</td>";
            }
            else if($i==1){
                echo "<td>".($j-1)."</td>";
            }
            else if($j==1){
                echo "<td>".($i-1)."</td>";
            }
            else{
                echo "<td>".($j-1)*($i-1)."</td>";
            }
        }
        echo "</tr>";
}

?>
 </table>
</div>
</body>
</html>