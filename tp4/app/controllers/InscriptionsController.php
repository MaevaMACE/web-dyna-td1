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
public function index() {
    $this->loadView($InscriptionsController/index.html);  
}
}
