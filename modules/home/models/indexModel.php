<?php

function getAllHeadPhone(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '16'  LIMIT 8");
}

function getAllSpeaker(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '17' LIMIT 8");

}
function getAllCharger(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `id_category` = '18' LIMIT 8");

}

function getAllHot(){

	return db_fetch_array("SELECT * FROM `tbl_product` WHERE `level` = 'hot' ");

}

function getAllSlider(){
	
	return db_fetch_array("SELECT * FROM `tbl_slider`");

}