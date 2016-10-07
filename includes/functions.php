<?php

function directToIndex(){
	header("Location:promo.php");
}

function path_url($url){
	return "http://".$_SERVER['SERVER_NAME']."/tiketmonstr/".$url;
}

function setActivePage($page, $val){
	if($page == $val){
	    echo 'class="active"';
	}
}