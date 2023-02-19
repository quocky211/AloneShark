<?php
function construct() {

	load_model('index');	

}

function indexAction() {
	
	$headphones = getAllHeadPhone();
	$speakers = getAllSpeaker();
	$chargers = getAllCharger();
	$hots = getAllHot();
	$sliders = getAllSlider();
	$_SESSION['product_hot'] = $hots;
	$data = [ $headphones, $speakers, $chargers, $hots, $sliders];
	load_view('index',$data);
}

function addAction() {

}

function editAction() {

}
