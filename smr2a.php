Anabella

<?php

$f=fopen('visitar.txt','a');
fwrite($f,$_SERVER['REMOTE_ADDR']."\r\n");
fclose($f)

?>