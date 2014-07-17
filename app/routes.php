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
	return View::make('land');

});

// Ipsum paragraph page 
Route::get('/paragraph/{format?}', function($format = 'html') {

	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs(5);
	
	echo implode('<p>', $paragraphs);

        /* Default - HTML
        if($format == 'html') {
                return "Congradulations, your html route works!";
        }
        // JSON
        elseif($format == 'json') {
                return "This is json";
        }
        // PDF (Coming soon)
        elseif($format == 'pdf') {
                return "This is the pdf (Coming soon).";
        } */
});

Route::get('/user', function() {

	$fakers =  array();
	for ($i =0; $i <10; $i++) {
	$fakers[$i]= Faker\Factory::create();
	$fakers[$i]->name .= '      ';
	echo $fakers[$i]->name;	
	}

	return View::make('userpg', $fakers );

});

