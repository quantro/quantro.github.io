<html>
<head>
<title>Fifty Shades of Grey</title>
<style>
  .ff{
    width:40px;
    height:40px;
    display:inline-block;
    margin-right:-4px;
    padding:2px;
  }
</style>
</head>
<body>
 
<?php
  $a = 1;
  $b = 255;
  $br = "";
  for($i=0;$i<=255;$i+=5){
    $b = $b - $i;
    if($a<=50){
      if($a==25){$br = "<br>";}else{$br="";}
      echo "<div class='ff' style='background:RGB($i,$i,$i); color:RGB($b,$b,$b);'>$a</div> $br";
    }
    $a++;
  }
?>
 
</body>
</html>
