<?php namespace App\Controllers;

class Realtime extends BaseController
{
	public function index()

	{
	 echo view('head');  // code...
   echo view('header');
	 echo view('content_realtime');
	 echo view('footer');
	}
	//--------------------------------------------------------------------

}
