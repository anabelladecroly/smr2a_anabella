<a href="http://192.168.0.166/smr2a_gabriel/smr2a.html">gabriel</a>

Anabella
<br>
<br>

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



<a href="http://192.168.0.106/smr2a_anabella/catalogo.php">Listado compañeros</a>



</html>

 <center>
 <h1>FORMULARIO</h1>
 
<form>

	<p>

		
		Correo electronico: <input type="email" name="correo">
	
	</p>
	
	<button>Enviar la informacion</button>
	
</form>


</html>
</center>

<a href="http://192.168.0.123/smr2a_pablo/smr2a.php">Pablo</a>
