<?php $this->layout('layout', ['title' => 'A propos']) ?>

<?php $this->start('main_content') ?>
	<h2>Alors c'est qui?.</h2>
	<p>Vous avez atteint la page A propos. Bravo.</p>
	<p>retour en page d'accueil <strong><a href="<?= $this->url('default_home') ?>">Acceuil</a></strong>.</p>

<?php $this->stop('main_content') ?>
