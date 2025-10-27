<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:1px solid #666;
            padding:5px;
        }
        table td{
            padding:3px 6px;
        }
    </style>
</head>
<body>
    <div style="border:1px solid black;padding:10px;width:fit-content">
    <table>
<?php
for($i=1;$i<=9;$i++){
    echo "<tr>";
    for($j=1;$j<=9;$j++){
        echo "<td>";
        echo ($j*$i);
        echo "</td>";
    }
    echo "</tr>";
}

?>
 </table>
</div>
</body>
</html>