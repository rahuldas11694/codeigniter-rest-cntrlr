<?php

/**
 *  
 */

// namespace controllers\api;
// use Restserver\Libraries\REST_Controller;
require(APPPATH.'libraries/REST_Controller.php');
// echo APPPATH.'libraries/REST_Controller.php'; die;


class Treatment_api extends REST_Controller
{
	
	/*use REST_Controller {
    	REST_Controller::__construct as private __resTraitConstruct;
  	}*/

  	public function index_get(){
  		echo "INDEX";
  		die;
  	}

  	public function user_get(){
  		echo "HELLO";
  		return;
  	}
}