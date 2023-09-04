<html>
	<head>
	</head>
	<body>
		<?php
		//O programa de venda de ingresso deve 
		//Se a pessoa for estudante deve pagar meia entrada
		//Se for menor de 6 anos também deve pagar meia 
		//passar para o formi,formulario
		$idade = 10;
		$estudante = 's';
		$valor_ingresso = 50;
		$meia = $valor_ingresso/2;
		if($idade < 6 || $estudante=='s'){
			// se verdadeiro
			echo "Você pagará meia entrada:" . $meia;
			echo "<img src=''/>";
		}
		else{ echo "Você pagará o valor inteiro:" . $valor_ingresso;
			
		}
		?>
	</body>
</html>