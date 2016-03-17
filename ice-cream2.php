<?php
	session_start();
		$name = $_SESSION['name'];
		$flavor = $_SESSION['flavor'];
		echo $name . " likes " . $flavor 
		. " ice cream.";
?>