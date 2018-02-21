<?php

	
	$name = "unspecified1";
	$surname = "unspecified";
	$email_address = "unspecified";
	$level_of_english = "unspecified";
	$surname = "unspecified";
	$surname = "unspecified";
	
	
	if( isset ( $_POST [ 'Name' ] ) ) $name = $_POST [ 'Name' ];
	if( isset ( $_POST [ 'Surname' ] ) ) $surname = $_POST[ 'Surname' ];
	if( isset( $_POST [ 'Email' ] ) ) $email_address = $_POST[ 'Email' ];
	if (isset ( $_POST [ 'optionsRadios' ] ) ) $level_of_english = $_POST [ 'optionsRadios' ]  ;
	

	echo "Your name: $name  <br>	Your surname: $surname   <br>   Your email: $email_address   <br>   Your level of english: $level_of_english";
?>