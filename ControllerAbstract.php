<?php

abstract class ControllerAbstract
{
	public function view($name)
	{
		return include "views/{$name}.phtml";
	}
}