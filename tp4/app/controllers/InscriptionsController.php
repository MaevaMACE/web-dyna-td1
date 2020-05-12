<?php
namespace controllers;
 /**
 * Controller InscriptionController
 **/
 class InscriptionController extends ControllerBase{

	/**
	*
	* @get("_default","name"=>"Home")
	*/
	public function index(){
		$this->loadView("InscriptionController/index.html");
		$this->loadView($defaultPage,compact('defaultPage'));
	}

	/**
	 *@route("inscription")
	**/
	public function bouton(){
		
		$this->loadView('InscriptionController/bouton.html');

	}

}