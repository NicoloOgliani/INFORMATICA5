<!doctype html>
<html>
	<head>
		<title>Pagina prova php</title>
	</head>
	<body>
		<?php
			//phpinfo ();

			$var; //alloco una variabile vuota
			$var=19; //inserisco un numero intero nella variabile
			echo($var.'<br />');//stampo il valore della variabile e concateno l'andata a capo in html
			
			$var= $var / 2;
			echo($var.'<br />');

			$var="ciao";
			echo($var. '<br />');

			//var_dump($var);
			$var=10;
			if($var<12){
				echo('variabile minore di 12<br />');

			}else{
				echo('Variabile maggiore o uguale di 12<br />');
			}
			echo('<br />');
			$var=0;
			while($var<=10){
				echo($var.' - ');
				$var++;
			}
			echo('<br />');
		?>
	</body>
</html>
