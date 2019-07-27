<?php
namespace EvoYaMetrika;

class Controller {
	public $modx;
	
	public function __construct(\DocumentParser $modx){
		$this->modx = $modx;
		echo "Run";
	}
}