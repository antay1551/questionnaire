<!DOCTYPE html>
<html>
	<!-- HEAD -->
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<!-- /HEAD -->
	
<?php
	$name = "unspecified1";
	$surname = "unspecified";
	$email_address = "unspecified";
	$level_of_english = "unspecified";
	$summary = "unspecified";
	$text = "unspecified";
	$rate = "unspecified";
	
	if( isset ( $_POST [ 'Name' ] ) ) $name = $_POST [ 'Name' ];
	if( isset ( $_POST [ 'Surname' ] ) ) $surname = $_POST[ 'Surname' ];
	if( isset ( $_POST [ 'Email' ] ) ) $email_address = $_POST[ 'Email' ];
	if( isset ( $_POST [ 'optionsRadios' ] ) ) $level_of_english = $_POST [ 'optionsRadios' ]  ;
	if( isset ( $_POST [ 'what_rate' ]  ) ) $rate = $_POST [ 'what_rate' ]  ;
	if( isset ( $_POST [ 'text_area' ]  ) ) $text = $_POST [ 'text_area' ]  ;
	if( isset ( $_POST [ 'Summary_name' ]  ) ) $summary = $_POST [ 'Summary_name' ] ;
	
	//$to ="antay1551@gmail.com";
	//$subject="test";
	//$message="test messager";
	//$headers="FROM: Test\r\n MIME-Version: 1.0\r\n Content-type: text/html; charset=windows-1251";
	//mail($to,$subject, $message, $headers);
	//mail("antay1551@gmail.com", "My Subject", "Line 1\nLine 2\nLine 3");
	//mail("antay1551@gmail.com", "Загаловок", 'From: antay1551@gmail.com');
	//echo"1111111";
	//echo "Your name: $name  	Your surname: $surname     Your email: $email_address      Your level of english: $level_of_english      Your rate: $rate      Your text: $text      Your Summary: $summary  ";

?>

	<!-- BODY -->
	<body>
		<div class="form-group">
			<label for="exampleTextarea"><h1>Results</h1></label>
			<textarea name="text_area" class="form-control" id="exampleTextarea" rows="7">
			<?php echo"Your name: $name
			Your surname: $surname
			Your email: $email_address
			Your level of english: $level_of_english
			Your rate: $rate
			Your text: $text
			Your Summary: $summary";
			?>
			</textarea>
		</div><!--end form-group-->
	</body>
	<!-- /BODY -->
</html>