<?php
session_start();	
include "init.php";
	
$pageTitle = 'cart';
 
$do = isset($_GET['do']) ? $_GET['do'] : 'all';

if($do=='all')

{



        $selectitems=getAllFrom("item_id", $_SESSION['user'],0);

        foreach ($selectitems as $item) 
                            {

                            
                                
                                updateitemtobuy($_SESSION['user'],$item['item_id']);                           
                                
                                

                            }
                          
}

else 
{

    updateitemtobuy($_SESSION['user'], $_GET['itemid']); 
    
}


?>
<h1 class=" text-center m-5"> We will contact you soon  </h1>
<div class="row justify-content-center">

<a href="cart.php" class="btn btn-primary mr-2"> show your cart </a>
<a href="shop.php" class="btn btn-primary"> continue shoping  </a>
</div>
