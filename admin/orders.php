<?php
session_start();
$pageTitle=' orders';

if (isset($_SESSION['Username'])) {
    
    include 'init.php';
}
    


$selectitems=getAllFrom("item_id", );
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
    




 

include  $tpl.'footer.php';