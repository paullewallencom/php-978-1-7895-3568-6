<?php namespace System;

use System\View;

/*
 * controller - base controller
 * 
 */
class BaseController
{
	/**
	 * view variable to use the view class
	 * @var string
	 *Defining a property or method as public means that the class, the extended class, and the file where a class is instantiated all have access to read and write the method or property
	 */
	public $view;

	/**
	 * url variable to get the current relative url
	 * @var string
	 */
    public $url;

	/**
	 * on run make an instance of the config class and view class
	 */
	public function __construct()
    {
		//initialise the views object
		$this->view = new View();

        //get the current relative url
		$this->url = $this->getUrl();

		if(ENVIRONMENT == 'development') {
			$whoops = new \Whoops\Run;
			$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
			$whoops->register();
		}
	}

	/*A protected method or property can only be accessed by the  class, or an extended class
	*/

	protected function getUrl()
    {
		$url = isset($_SERVER['REQUEST_URI']) ? rtrim($_SERVER['REQUEST_URI'], '/') : NULL;
		$url = filter_var($url, FILTER_SANITIZE_URL);
		return $this->url = $url;
	}

}
