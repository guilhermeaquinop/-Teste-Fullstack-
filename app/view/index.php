<?php
include_once '/laragon/www/teste-fullstack/app/controllers/api_drinks.php';
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/Teste-Fullstack/app/index.css">
	<title>Drinks</title>
</head>

<body>
	<main>
		<div class="menu">
			<div class="menu-title">
				<span>Drinks</span>
			</div>

			<div class="menu-options">
				<div class="menu-options-container">
					<span>Cardápio</span>
				</div>
				<div class="menu-options-container">
					<span>Buscar</span>
				</div>
			</div>

			<div class="menu-footer">
				<a href="#">Sobre</a>
			</div>
		</div>
		<div class="cardapio">
			<div class="cardapio-container">
				<!-- Código PHP: Requisição da imagens, nomes e ID dos Drinks -->
				<?php
				foreach ($result->drinks as $Drinks) {
				?>
					<div class="cardapio-drinks">
						<div class="cardapio-drinks-thumb">
							<img src="<?= $Drinks->strDrinkThumb ?>" id="cardapio-drinks-image"> <!-- Imagens -->
						</div>
						<div class="cardapio-drinks-texts">
							<p><?= $Drinks->strDrink ?></p>
							<p>ID:&nbsp;<?= $Drinks->idDrink ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
		
		<!-- Código PHP -->
		</div>
		</div>
	</main>
</body>

</html>