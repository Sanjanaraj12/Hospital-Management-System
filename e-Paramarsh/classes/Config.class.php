<?php 


class Config{

	// database

	const DB_HOST = "localhost"; 
	const DB_NAME = "hospital"; 
	const DB_USER = "root"; 
	const DB_PASSWORD = ""; 


	// SYSTEM 

	const SYSTEM_NAME = "EMR";
	const SLOGAN = "EMR";  


	
	public static function redir($page){
		header("Location: $page"); 
	}

	public static function includeD(){

	}


	public static function getMonth(){
	
	}


	public static function getWeek(){
		
		return 604800;
	}



}