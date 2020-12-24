<?php namespace App\Controllers;

use System\BaseController;

class Home extends BaseController
{
    public function index()
    {
        return $this->view->render('packt');
    }

    public function packt()
    {
        return $this->view->render('packt');
    }
}
