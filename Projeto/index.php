<?php /* Código API */ 

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://the-cocktail-db.p.rapidapi.com/filter.php?i=Gin",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: the-cocktail-db.p.rapidapi.com",
		"x-rapidapi-key: 09d8e86b69msh367d3917d7092d8p152d35jsnbed02402c430"
	],
]);

$response = (curl_exec($curl));
$result = json_decode($response);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>Drinks</title>
	</head>
<body>
	<header class="title"> 
		<h3>Drinks</h3>
		<div>
			<img src="/Teste-Fullstack/images/drink.png" alt="Drink" id="drinkPng">
		</div> 
	</header>
	<main class="container">
		<div class="section-names">
			<!-- Código PHP: Gera botões com o nome de cada Drink -->
			<?php 
				foreach ($result->drinks as $Drinks) {
			?>
					<div>
						<input class="button-name" type="submit" value="<?= $Drinks->strDrink ?>">
					</div>
			<?php } ?>
			<!-- Código PHP -->			
		</div>
		<div class="section-infos">
			<!-- Código PHP: Requisição da imagens, nomes e ID dos Drinks -->
			<?php
				foreach ($result->drinks as $Drinks) {
			?>
					<div class="infos">
						<div class="image">
							<img src="<?= $Drinks->strDrinkThumb?>" id="strDrinkThumb"> <!-- Imagens -->	
						</div>
						<div class="text">
							<div class="name">
								<h4>Name:</h4>
								<p><?=$Drinks -> strDrink?></p> <!-- Nome  -->	
							</div>
							<div class="id">
								<h4>Id:</h4>
								<p><?=$Drinks -> idDrink?></p><!-- ID -->	
							</div>
						</div>
					</div>
			<?php } ?>
			<!-- Código PHP -->	
		</div>
	</main>
</body>
</html>