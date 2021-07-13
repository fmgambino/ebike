<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()

	{
	 echo view('head');  // code...
   echo view('header');
	 echo view('content_home');
	 echo view('footer');
	}
	//--------------------------------------------------------------------

}
