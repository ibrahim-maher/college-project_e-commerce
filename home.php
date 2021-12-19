
<?php
	ob_start();
	session_start();
	
	include 'init.php';	
	include $tpl  .'hero.php'; 

	$pageTitle = 'Homepage';
	

	

?>


<!-- scetion 1 -->

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


<!-- section 2 -->
<div class="container">


<div class="row my-3">
    <div class="col-4 mr-5 d-none d-sm-block ">
        <img src="layout/images/Project/Mask Group (4)-min.jpg"class="image-object">
    </div>


    <div class="col-7 tx_over_2">
        <img src="layout/images/Project/Mask Group (3)-min.jpg" class=" image-object">
        <div>
               <h1> Up to </h1>
                     
                     <p class='p70'> 70% </p>
                     <p class='p60'>Fly away to fabulous Fashion Flash  </p>
                            
    </div >
    </div>
</div>

<!-- section 3 -->



    <div class="row my-3">

        <div class="col-7 tx_over_2">
            <img src="layout/images/Project/Mask Group (6)-min.jpg " class=" image-object ">
            <div>
                <h1> Buy now </h1>
                        
             </div >
        </div>

        <div class="col-3 ml-4  d-none d-sm-block ">
            <img src="layout/images/Project/Mask Group (5)-min.jpg"class="image-object style='width: 300px;'">
        </div>

    </div>






    <!-- section 4 -->

    <div  class="py-3">
        <div class="container">
            <h2 class="text-center m-5">We've handpicked this collection of winter clothing to show you the best of the best </h2>
            <div class="row text-center">
                
                
                        <div class="col-4 tx_over_3">
                        <figure> <img src="layout/images/Project/Mask Group (7)-min.jpg"> </figure> 
                        
                                <h1>NEW <br> ARRIVALS </h1>   
                                <div class="btn btn_item  ">Shop Now</div>           
                        
                        </div>
                
                        <div class="col-4 tx_over_3">
                        <figure> <img src="layout/images/Project/Mask Group (8)-min.jpg"> </figure> 
                        
                                <h1>TOP  <br> SELLER </h1>   
                                <div class="btn btn_item  ">Shop Now</div>             
                        
                        </div>
                
                
                        <div class="col-4 tx_over_3">
                            <img src="layout/images/Project/Mask Group (8)-min.jpg" class=" image-object">
                        
                                <h1>TOP  <br> SELLER </h1>              
                        
                            </div>
            </div>
        </div>
    </div>


</div>

</div>
    <?php
	include $tpl . 'footer.php'; 

	ob_end_flush();
?>