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

Route::get('/user', function() 
{
	echo "We made a route!";

}
);

Route::get('/', function()
{
	return View::make('land');
});

Route::get('/ip', function()
{

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
   
	echo implode('<p>', $paragraphs);
#	return View::make ('phar');
});

