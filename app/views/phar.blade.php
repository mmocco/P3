

@extends ('_master')


@section ('title')
Paragraphs
@stop



@section ('content')

<div class='container'>

	
<h1>Here are your generated Paragraphs</h1>


<h2>Lorem Ipsum Generator</h2>

	<?php $generator = new Badcow\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs(5);

        echo implode('<p>', $paragraphs); ?>

@stop
