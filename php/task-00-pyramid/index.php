<!DOCTYPE html>
<html>
<body>
<?php

function pyramid_for($h){
    $height = 1;
    while($height <= $h){
	  for($i = 0; $i < $height; $i++){
		echo(0);
	  }
	  echo '<br>';
	  $height++;
    }
}

pyramid_for(29);

?>
</body>
</html>
