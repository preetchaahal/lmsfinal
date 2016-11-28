<?php

namespace Base;

abstract class Application {

	protected function removeNS($controller)
	{
		// Exlpodes the namespaced classname
		$controllerName = explode('\\', (string)$controller);
		// Returns the string at last index which is name of class; here [1]
		return $controllerName[2];
	}
	
	public function set(\Controller\BaseController $controller)
	{
		$controllerName = $this->removeNS($controller);
		
		$this->$controllerName = $controller;
		$this->{strtoupper($controllerName)} = $controller;
		$this->{strtolower($controllerName)} = $controller;

		return $this;
	}
}