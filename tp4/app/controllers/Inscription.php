<?php
namespace controllers;
 /**
 * Controller Inscription
 **/
class Inscription extends ControllerBase{

	public function index(){
		$this->loadView("Inscription/index.html");
	}
}
