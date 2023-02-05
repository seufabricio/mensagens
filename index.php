<!DOCTYPE html>
<html>
	<head>
	
		<meta charset="UTF-8">
		<title>Sorria</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<body class="w3-container w3-auto">
		<link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
		<link rel="stylesheet" href="./style.css">

	</head>
	<body>
	
		<script>
		
			function mostrar(el) {
			var display = document.getElementById(el).style.display;
			if (display == "none")
			document.getElementById(el).style.display = 'block';
			else
			document.getElementById(el).style.display = 'none';
		}
		
			
		</script>
		
		
		
			

		<div class="w3-container w3-center">
			<div id="minhaDiv" style="display:none">
				<h1 id="titulo">texto aqui</h1>
			</div>
			
			
			<div>
				<p>@seu_fabricio</p>
			</div>
			
			<div>
				
			</div>
			
			<div>
				<button id="botao"
				type="button" onclick="mostrar('minhaDiv')">Mostrar</button>	
				
			</div>
			
			<div>
		
				<?php
			
					include "conexao.php";
					
					
					$sql = "SELECT * FROM textos order by rand()";
					
					$dados = mysqli_query($conn, $sql);
					while($row=$dados->fetch_assoc()){
						echo "<script>document.getElementById('titulo').innerHTML='".utf8_encode($row['frase'])."'</script>";
					}
				
				?>
			</div>

		</div>
		
			<script>
				document.getElementById("botao").addEventListener("click", function(){
				this.style.display = "none";
			});
			</script>
	</body>
	
</html>