<?php	

ob_start();
session_start();
	
$pageTitle = 'shop';
include 'init.php';
include $tpl  .'hero.php'; 

?>

<!--  section 1   -->
<div class="container">
<div class="row my-3">
 
<div class="col-4 btn-over ">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;"> Women  Collection </div>                
            </div >
</div >

    <div class="col-4 btn-over ">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;"> Women  Collection </div>                
            </div >
    </div >
    <div class="col-4 btn-over">
        <img src="layout/images/Project/Mask Group (4)-min.jpg" >
            <div>
                <div class="btn btn-primary " style=" width: 320px;" > Women  Collection </div>                
            </div >
    </div > 

</div>

</div>






<!--  section 2   -->

<h2 class="text-center m-5">Woman collection </h2>

<div id="productSlider" class="carousel slide carousel-fade mt-2" data-ride="carousel">
<div class="carousel-inner">


    <div class="carousel-item active">
        <div class="container">
            <div class="row">

                <?php

                $nth=0;

                $allItems = itemsbetween('*', 'items',$nth,15);
                  
                    foreach ($allItems as $item) 
                    {
                            $nth++;
                            ?>
                            <div class="col-3   ">
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
                                        <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>
                                    </div>                                                                      
                                </div>
                            </div>
                            <?php                                  
                    }              
    ?>                                                     
        </div>
</div>

</div>

<div class="carousel-item ">
    <div class="container">
        <div class="row ">

            <?php
           
            $allItems = itemsbetween('*', 'items',$nth,15);
            
                foreach ($allItems as $item) 
                {
                        
                        ?>
                        <div class="col-3   ">
                            <div class="card pl-4 pr-4" style="width: 18rem;">
                            <img class="card-img-top tx_over_item "  src=<?php echo '  "admin/uploads/images/'.$item['it_img'].' " ';?> alt="Card image cap">
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
                                   <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>

                                   
                                </div>
                            
                                    
                            </div>
                        </div>
                <?php               
                }
            ?>
           
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="mt-5 ">
                    <a class="fa fa-chevron-left btn btn-info m-5" style ="height:150pxr" href="#productSlider" data-slide="prev"></a>
                    <a class="fa fa-chevron-right btn btn-info m-5 " href="#productSlider" data-slide="next"></a>
                
            </div>
</a>
</div>
</div>
</div>






<!--  section 3   -->

<h2 class="text-center m-5"> child collection </h2>

<div id="productSlider2" class="carousel slide carousel-fade mt-2" data-ride="carousel">
<div class="carousel-inner">


    <div class="carousel-item active">
        <div class="container">
            <div class="row">

                <?php

                $nth=0;

                $allItems = itemsbetween('*', 'items',$nth,16);
                  
                    foreach ($allItems as $item) 
                    {
                            $nth++;
                            ?>
                            <div class="col-3   ">
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
                                        <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>
                                    </div>                                                                      
                                </div>
                            </div>
                            <?php                                  
                    }              
    ?>                                                     
        </div>
</div>

</div>

<div class="carousel-item ">
    <div class="container">
        <div class="row ">

            <?php
           
            $allItems = itemsbetween('*', 'items',$nth,16);
            
                foreach ($allItems as $item) 
                {
                        
                        ?>
                        <div class="col-3   ">
                            <div class="card pl-4 pr-4" style="width: 18rem;">
                            <img class="card-img-top tx_over_item "  src=<?php echo '  "admin/uploads/images/'.$item['it_img'].' " ';?> alt="Card image cap">
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
                                   <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>

                                   
                                </div>
                            
                                    
                            </div>
                        </div>
                <?php               
                }
            ?>
           
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="mt-5 ">
                    <a class="fa fa-chevron-left btn btn-info m-5" style ="height:150pxr" href="#productSlider2" data-slide="prev"></a>
                    <a class="fa fa-chevron-right btn btn-info m-5 " href="#productSlider2" data-slide="next"></a>
                
            </div>
</a>
</div>
</div>
</div>












<!--  section 2   -->

<h2 class="text-center m-5">Woman collection </h2>

<div id="productSlider1" class="carousel slide carousel-fade mt-2" data-ride="carousel">
<div class="carousel-inner">


    <div class="carousel-item active">
        <div class="container">
            <div class="row">

                <?php

                $nth=0;

                $allItems = itemsbetween('*', 'items',$nth,15);
                  
                    foreach ($allItems as $item) 
                    {
                            $nth++;
                            ?>
                            <div class="col-3   ">
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
                                        <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>
                                    </div>                                                                      
                                </div>
                            </div>
                            <?php                                  
                    }              
    ?>                                                     
        </div>
</div>

</div>

<div class="carousel-item ">
    <div class="container">
        <div class="row ">

            <?php
           
            $allItems = itemsbetween('*', 'items',$nth,15);
            
                foreach ($allItems as $item) 
                {
                        
                        ?>
                        <div class="col-3   ">
                            <div class="card pl-4 pr-4" style="width: 18rem;">
                            <img class="card-img-top tx_over_item "  src=<?php echo '  "admin/uploads/images/'.$item['it_img'].' " ';?> alt="Card image cap">
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
                                   <?php echo " <a href='addtocart.php?itemid=" . $item['it_id'] . "' class='btn btn-primary'> buy now</a>";?>

                                   
                                </div>
                            
                                    
                            </div>
                        </div>
                <?php               
                }
            ?>
           
        </div>
    </div>
</div>

<div class="row justify-content-center">
<div class="mt-5 ">
                    <a class="fa fa-chevron-left btn btn-info m-5" style ="height:150pxr" href="#productSlider1" data-slide="prev"></a>
                    <a class="fa fa-chevron-right btn btn-info m-5 " href="#productSlider1" data-slide="next"></a>
                
            </div>
</a>
</div>
</div>
</div>

<!-- *****************************
*****************************
*****************************
*****************************
*****************************
*****************************
*****************************
*****************************
*****************************

end   The following code is for testing only

*****************************
*****************************
*****************************
*****************************
*****************************
*****************************
*****************************
*****************************
************************************-->

<form action=""></form>









<?php
include $tpl .'footer.php';

