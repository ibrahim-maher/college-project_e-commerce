<?php
session_start();	
include "init.php";
	
$pageTitle = 'cart';

try {
    
$selectitems=getAllFrom("item_id", $_SESSION['user'],0);
echo' <h2 class="text-center m-5"> Your cart  </h2> ';
echo' <div class="container">';
echo' <div class="row">';
foreach ($selectitems as $item) 
                    {

                        $allItems = getitemstocart($item['item_id']);
                      
                        foreach ($allItems as $item) 
                        {
                             
                                ?>
                                <div class="col-3  ">
                                    <div class="card pl-4 pr-4" style="width: 18rem;">
                                    <img class="card-img-top tx_over_item " src=<?php echo '  "admin/uploads/images/'.$item['it_img'].' " ';?> alt="Card image cap">
                                        <div class="card-body">
                                            <div class="row"> 
                                                <h5 class="col-8 card-title"> <?php echo $item['it_name'] ;?> </h5>
                                            <?php if(! empty($item['it_dis']))
                                                {
                                                    echo "  <p class='col-4  items_dis '>".$item['it_dis']."%</p> ";
                                                }
                                                ?>
                                            
                                            </div>
                                            <p class="card-text" style=" 
                                            width: 200px;
                                        
                                            text-overflow: ellipsis;
            
                                        
                                            white-space: nowrap;
                                            overflow: hidden;
                                            
                                            
                                            "><?php echo $item['it_desc'] ;?> </p>
                                            <div class="row"> 
                                                <p class="col-4 card-text price"><?php echo $item['it_price'] ;?>$</p>
                                                <p class="col-4 card-text price_after"><?php echo $item['it_dis_price'] ;?>$</p>
                                            </div>                   
                                            <?php echo " <a href='buy.php?do=bb&&itemid=" . $item['it_id'] . "' class='btn btn-primary'>  buy now</a>";?>
                                            <?php echo " <a href='addtocart.php?do=Delete&&itemid=" . $item['it_id'] . "' class='btn btn-danger'>  delete</a>";?>
                                        </div>                                                                      
                                    </div>
                                </div>
                                <?php                                  
                        }     
                        

                    }
echo " </div>";
echo"</div>";

?>
<div class="container text-center">
    <a href="buy.php?do=all"> <div class="btn btn-primary m-5"> buy all now</div></a>
</div>
<?php
}
catch(Exception $e) {
    echo' <div class="container text-center">
    <h2 class="text-center m-5"> No items yet   </h2> 
    <a href="shop.php" class="btn btn-primary">  shop now </a>
    </div>';
  }







  try {
    
    $selectitems=getAllFrom("item_id", $_SESSION['user'],1);
    echo' <h2 class="text-center m-5">  Ordered items   </h2> ';
    echo' <div class="container">';
    echo' <div class="row">';
    foreach ($selectitems as $item) 
                        {
    
                            $allItems = getitemstocart($item['item_id']);
                          
                            foreach ($allItems as $item) 
                            {
                                 
                                    ?>
                                    <div class="col-3  ">
                                        <div class="card pl-4 pr-4" style="width: 18rem;">
                                        <img class="card-img-top tx_over_item " src=<?php echo '  "admin/uploads/images/'.$item['it_img'].' " ';?> alt="Card image cap">
                                            <div class="card-body">
                                                <div class="row"> 
                                                    <h5 class="col-8 card-title"> <?php echo $item['it_name'] ;?> </h5>
                                                <?php if(! empty($item['it_dis']))
                                                    {
                                                        echo "  <p class='col-4  items_dis '>".$item['it_dis']."%</p> ";
                                                    }
                                                    ?>
                                                
                                                </div>
                                                <p class="card-text" style=" 
                                                width: 200px;
                                            
                                                text-overflow: ellipsis;
                
                                            
                                                white-space: nowrap;
                                                overflow: hidden;
                                                
                                                
                                                "><?php echo $item['it_desc'] ;?> </p>
                                                <div class="row"> 
                                                    <p class="col-4 card-text price"><?php echo $item['it_price'] ;?>$</p>
                                                    <p class="col-4 card-text price_after"><?php echo $item['it_dis_price'] ;?>$</p>
                                                </div>                   
                                                <?php echo " <a href='addtocart.php?do=Delete&&itemid=" . $item['it_id'] . "' class='btn btn-danger'>  delete</a>";?>
                                            </div>                                                                      
                                        </div>
                                    </div>
                                    <?php                                  
                            }     
                            
    
                        }
    echo " </div>";
    echo"</div>";
    
    
    }
    catch(Exception $e) {
        echo' <div class="container text-center">
        <h2 class="text-center m-5"> No items yet   </h2> 
        <a href="shop.php" class="btn btn-primary">  shop now </a>
        </div>';
      }