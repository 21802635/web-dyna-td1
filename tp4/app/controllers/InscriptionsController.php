<?php
namespace controllers;
 /**
 * Controller InscriptionsController
 **/
class InscriptionsController extends ControllerBase{
/**
 *
 * @get("_default","name"=>"Home")
 */
public function index()
	{
		$this->loadView("InscriptionsController/index.html");
	}

	/**
	 *@route("Inscription")
	**/
	public function Bouton(){
		
		$this->loadView('InscriptionsController/Bouton.html');

	}


	/**
	 *@route("/do/Inscription")
	**/
	public function do(){
		
		$this->loadView('InscriptionsController/do.html');

	}

}
