<?php namespace App\Controllers;

class History extends BaseController
{
	public function index()

	{
	 echo view('head');  // code...
   echo view('header');
	 echo view('content_history');
	 echo view('footer');
	}
	//--------------------------------------------------------------------

}
