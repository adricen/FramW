<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$this->show('default/home');
	}
	/*
		Page A_propos
	*/
	public function a_propos()
	{
		$this->show('default/a_propos');
	}

}
