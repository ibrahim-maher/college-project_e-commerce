<?php
	ob_start();
	session_start();
		
	$pageTitle = 'home';
	include 'init.php';	


	
	
	header('Location: home.php'); 
?>
  


      <!-- section 2 -->





<?php
	include $tpl . 'footer.php'; 
	ob_end_flush();
?>