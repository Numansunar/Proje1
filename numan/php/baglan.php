<?php 
	
	try 
	{
     $db = new PDO("mysql:host=localhost;dbname=numan", "root", "12345678");
	} 
	catch ( PDOException $e )
	{
     print $e->getMessage();
	}



 ?>