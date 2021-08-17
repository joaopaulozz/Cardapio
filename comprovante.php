<?php
			
	// testes print_r($_POST);

	$a = $_POST["a"]; $d = $_POST["d"];
	$b = $_POST["b"]; $e = $_POST["e"];
	$c = $_POST["c"]; $f = $_POST["f"];
	$r = 0.00; $obs = $_POST["obs"];

	if(isset($_POST["opcao1"])){
		$r = (8.30 * $a)+(6.00 *$d);
		if($_POST["Opicional1"] != "sem"){
			$r = (8.30 * $a)+(6.00 *$d)+($a * 2);
		}
	}

	if(isset($_POST["opcao2"])){
		$r += 7.00 * $b+(5.00 *$e);
		if($_POST["Opicional2"] != "sem"){
			$r += (7.00 * $b)+(5.00 *$e)+($b * 2);
		}
	}

	if(isset($_POST["opcao3"])){
		$r .= 8.90 * $c.(5.50 *$f);
		if($_POST["Opicional3"] != "sem"){
			$r += (8.90 * $c)+(5.50 *$f)+($c * 2);
		}
	}
	if(isset($_POST["opcional"])){
		$r += 8.90 * $c+(5.50 *$f);
	}

	echo "Pedido realizado com sucesso!<br>";
	echo "Sua conta ficou em R$: $r<br>";
	echo "$obs";
			
?>