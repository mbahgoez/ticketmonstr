<?php


function ifSetSession(){
	if(isset($_SESSION)){
		header("Location:index.php");
	} 
}

function ifNotSetSession(){
	if(!isset($_SESSION)){
		header("Location:login.php");
	}	
}

function path_url($url){
	return "http://".$_SERVER['SERVER_NAME']."/tiketmonstr/".$url;
}

function setActivePage($page, $val){
	if($page == $val){
	    echo 'class="active"';
	}
}