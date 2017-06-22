<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title><?= $this->e($title) ?></title>

	<link rel="stylesheet" href="<?= $this->assetUrl('css/style.css') ?>">
</head>
<body>
	<div class="container">
		<header>
			<h1>Site CV :: <?= $this->e($title) ?></h1>
			<?php // print_r($this); ?>
			<?php //echo $this-> url('default_home'); ?>
			<?php //print_r( $this->e); ?>
			<nav>
				<ul>
					<li><a href="<?= $this-> url('default_home'); ?>">Home</a></li>
					<li><a href="<?= $this-> url('default_a_propos'); ?>">A propos</a></li>
				</ul>
			</nav>
		</header>

		<section>
			<?= $this->section('main_content') ?>
		</section>

		<footer>
		</footer>
	</div>
</body>
</html>
