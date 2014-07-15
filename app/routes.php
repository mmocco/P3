<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	
	
	echo implode('<p>', $paragraphs);

	$fakers =  array();
	for ($i =0; $i <10; $i++) {
	$fakers[$i]= Faker\Factory::create();
	$fakers[$i]->name .= '      ';
	echo $fakers[$i]->name;	

	}
		
	
	return View::make('land');
   
#	return View::make ('phar');

});

