<?php namespace App\Controllers;

class Extraerbike extends BaseController
{
	public function index()

	{
	 echo view('head');  // code...
   echo view('header');
	 echo view('content_bike');
	 echo view('footer');
	}
	//--------------------------------------------------------------------

}
