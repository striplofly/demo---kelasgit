<?php namespace App\Http\Controllers;

class WelcomeController extends Controller
{
	public function index()
	{
	 $items=array(
	 'items' => [
	 		'Pack luggage', 'Go to airport', 'Arrive in Penang'
	 		]
	 		);

	// dd($items);
	 return view('welcome');
	}	
}