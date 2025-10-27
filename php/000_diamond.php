<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$temp=0;
for($i=1;$i<=9;$i++){
 
  if($i>5){
    $temp=$temp-1;
  }else{
    $temp=$i;
  }
 
  for($j=1;$j<=(4+$temp);$j++){
    if($j<=(5-$temp)){
      echo "&nbsp;";
    }else{
      echo "*";
    }
  }
  echo "<br>";
}

    ?>
</body>
</html>