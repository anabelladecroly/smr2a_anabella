<a href="http://192.168.0.166/smr2a_gabriel/smr2a.html">gabriel</a>

Anabella

<a href="http://192.168.0.165/smr2a_pablo/smr2a.html">pablo</a>

<?php
$f=fopen('visitas.txt','a');
fwrite($f,date('Y-m-d H:i:s '));
fwrite($f,$_SERVER['REMOTE_ADDR']);
fwrite($f,"\r\n");
fclose($f)
?>

<?php
if(isset($_GET['correo'])){
	$f=fopen('suscriptores.txt','a');
	fwrite($f,$_GET['correo']);
	fwrite($f,"\r\n");
	fclose($f);
}
?>


<form>
	<input name="correo" type="email">
	<button>Enviar</button>
</form>