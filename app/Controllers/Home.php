<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    	 echo view('templates_user/header');	
    	 echo view('templates_user/sidebar');
    	 echo view('user/home');
    	 echo view('templates_user/footer');
    }
}
