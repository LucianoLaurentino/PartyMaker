<?php

class Validation{
	
	//validando o campo nome 
	public static function validateNameHost($value){
		//  buscando no testador a sintaxe do nome 
		$exp = '/^[^.!@#$%¨&*]{2,100}$/';
		//pega a expressão e o valor recebido para validar 
		if(preg_match($exp,$value)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha nome
	//validando o campo nome
	public static function validateEmail($value){
		//  buscando no testador a sintaxe do nome 
		$exp1 = '/^[^!#$%¨&*]{10,100}$/';
		//pega a expressão e o valor recebido para validar 
		if(preg_match($exp1,$value)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha nome
	public static function validateGuestsParty($value){
		//  buscando no testador a sintaxe do nome 
		$exp1 = '/^[^.!@#$%¨&*]{1,4}$/';
		//pega a expressão e o valor recebido para validar 
		if(preg_match($exp1,$value)){
			return true;
		}else{
			return false;
		}//fecha else
	}//fecha nome

}

?>