<?php
	$fp = fopen("counter.txt", "r");		 		
	if(filesize("counter.txt")==0){
		$count = 0;									
	}
	else{
		$count = fread($fp, filesize("counter.txt"));	
	}
									
	fclose($fp);									
	if (!$_COOKIE['ip']){													
		setcookie("ip", $_SERVER["REMOTE_ADDR"]);	
		$count++;									
	}												
									
	$fp = fopen("counter.txt", "w");					
	fwrite($fp, "$count", strlen($count));				
	fclose($fp);										
?>