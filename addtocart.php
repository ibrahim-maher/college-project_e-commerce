<?php
session_start();	
include "init.php";


if (! isset($_SESSION['user'])) {
     header('Location: login.php');
}
else{
$do = isset($_GET['do']) ? $_GET['do'] : 'add';

if ( $do == 'add')
    
{
createtable($_SESSION['user'] );

inserttotable($_SESSION['user'],intval($_GET['itemid']),$_SESSION['uid']);

?>
<div class="container text-center">
<h1 class="  m-5" > item inserted succsessfully</h1>
<?php echo " <a href='shop.php' class='btn btn-primary'> Continue shopping</a>";?>
<?php echo " <a href='cart.php' class='btn btn-primary'> show your cart </a>";?>
</div>
<?php
}


else

    { 
     deletetitemstocart(intval($_GET['itemid']),$_SESSION['user']);

		
     ?>
     <div class="container text-center">
     <h1 class="  m-5" > item deleted succsessfully</h1>
     <?php echo " <a href='shop.php' class='btn btn-primary'> Continue shopping</a>";?>
     <?php echo " <a href='cart.php' class='btn btn-primary'> show your cart </a>";?>
     </div>
     <?php
        
     	

		
     
			// The Row Count
      
		

			// If There's Such ID Show The Form
    }
}