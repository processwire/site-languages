<?php namespace ProcessWire;

// home.php (homepage) template file. 

/** @var Page $page */

// Primary content is the page body copy
$content = $page->get('body');

// Append navigation to child pages underneath the body copy
// See the _func.php file for the renderNav() function example
$content .= renderNav($page->children); 

// if there are images, lets choose one to output in the sidebar
$images = $page->get('images'); /** @var Pageimages $images */

if($images && count($images)) {
	
	// if the page has images on it, grab one of them randomly... 
	$image = $images->getRandom();
	
	// resize it to 400 pixels wide
	$image = $image->width(400); 
	
	// output the image at the top of the sidebar
	$sidebar = "<img src='$image->url' alt='$image->description' />";
	
	// if image has a description, display it underneath
	if($image->description) $sidebar .= "<blockquote>$image->description</blockquote>";
	
	// append sidebar text content if page has it
	$sidebar .= $page->get('sidebar'); 
	
} else {
	// no images... 
	// make sidebar contain text content if page has it
	$sidebar = $page->get('sidebar'); 
}

