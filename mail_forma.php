<?php
	if(isset($_POST['submit'])){
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
		if(($name == '') || ($email == '') || ($message == '')){
			
			echo 'Morate popuniti sva polja';
		}
		else {
			
			$subject = 'Poruka je poslata sa sajta';
			$from = "Od: $name<$email>";
			mail('bane1manojlovic@gmail.com', $subject, $message, $from);
			echo 'Poruka je poslata uspesno';
		}
	}
?>

