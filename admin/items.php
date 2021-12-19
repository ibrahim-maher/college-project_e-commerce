<?php

/*   categories page  */
session_start();
$pageTitle=' items';

if (isset($_SESSION['Username'])) 

{
  
    include 'init.php';
   
    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
    
    if ( $do == 'Manage')
    
    {

        $stmt = $con->prepare("SELECT * FROM  shop.items ");
		$stmt->execute();
		$rows = $stmt->fetchAll();

       
  
      
      ?>
 
                <h1 class="text-center my-5"> Mange items </h1>
                <div class="container">
                <table class="table table-dark table-striped table-hover table-bordered border-primary">


            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">item name</th>
                <th scope="col">item description</th>
                <th scope="col"> items categories </th>
                <th scope="col">  controls </th>
                </tr>
            </thead>
            <tbody>
            
            <?php
                            $counter=0;      
                                foreach( $rows as $row )
                                {
                                $counter ++;
                                $blaaaaaa = $row['it_cat_id'];
                                $cat = $con->prepare("SELECT * FROM  shop.categories WHERE cat_id= ? ");
                                $cat->execute(array($blaaaaaa));
                                $cat = $cat->fetch();
                                
        
                                
                                echo  '<tr>' ; 
                                echo  '<td>' .$row['it_id'].'</td>' ; 
                                echo  '<td>' .$row['it_name'].'</td>' ; 
                                echo  '<td>' .$row['it_price'].'</td>' ;
                                echo  '<td>'. $cat['cat_name']. '</td>' ;
                                echo "<td>
                                <a href='items.php?do=Edit&it_id=" . $row['it_id'] . "&cat_id=".$cat['cat_id']."' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                <a href='items.php?do=Delete&it_id=" . $row['it_id'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";   
                                echo  '</tr>' ; 

                                
                            
                                
                            }

                            if( $counter==0)
                            {
                            
                                echo  '<tr>' ; 
                                echo  '<td colspan = "6" align="center"> no items yet  </td>' ; 
                                echo  '</tr>' ; 
                            }

                
            ?>
            </tbody>
            </table>
                        <div class="container text-center ">
                        <a href="items.php?do=Add" class="btn btn-primary my-3">
                            <i class="fa fa-plus"></i> New item
                        </a>
                        </div>
                </div>
                <?php
}
    elseif ( $do=='Add')
    {
      ?>
      
      <h1 class="text-center my-5"> Add new item</h1>
                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=insert' method='POST' enctype="multipart/form-data">
                <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label">item name</label>
                    <input type="hidden" class="form-control" name="inputitemid" >
                    <input type="text" class="form-control"  name="inputitemname" required>
                  </div>
  
                  <div class="col-md-6 my-2">
                    <label id="price" for="inputcatname" class="form-label">item price</label>
                    <input type="text" class="form-control"  name="inputitemprice" required>
                  </div>

                  <div class="col-md-6 my-2">
                    <label id="dis" for="inputcatname" class="form-label">item discount</label>
                    <input type="text" class="form-control"  name="inputitemdis" >
                  </div>
  
                  <div class="col-md-6 my-2">
                    <label id="after_price" for="inputcatname" class="form-label"> price after discount</label>
                    <input type="text" class="form-control"  name="inputitempreice2"  >
                  </div>


                  <div class="col-md-12 my-2">
						<label class="form-label">Category</label>
							<select class="col-md-12 " name="category">
								<option value="0">...</option>
								<?php

                                    $stmt = $con->prepare("SELECT * FROM  shop.categories ");
                                    $stmt->execute();
                                    $rows = $stmt->fetchAll(); 
                                    
                                    foreach( $rows as $row )
                                {
                                    
                                    echo '<option value="'.$row["cat_id"] .' ">'.$row["cat_name"].'</option>';
                                }

								?>
							</select>
						
					</div>


                  <div class="col-md-12 my-2">
                    <label for="inputcatname" class="form-label">item rate </label>
                    <input type="text" class="form-control"  name="inputitemrate" >
                  </div>

                  <div class="col-6  my-2">
                    <label for="inputEmail4" class="form-label">description</label>
                    <textarea class="form-control" name="inputitemdes"  id="form4Example3" rows="4" required  ></textarea>
                  </div>

                  <div class="col-6  my-2">
                    <label for="inputEmail4" class="form-label">image</label>
                    <input type="file" name="uploadimg" class="form-control" required="required" />
                    
                  </div>

                  <div class="col-1 my-3 id ='#edit_btn' ">
                    <button type="submit" class="btn btn-primary" style="text-center"> Save </button>
                  </div>
                  </form>
              </div >
              <?php
    }
    
    elseif ( $do=='insert')
    
    {
         
           
        $itemid    =$_POST['inputitemid'];
        $itemname  =$_POST['inputitemname'];
        $itemprice =$_POST['inputitemprice'];
        $itemdis   =$_POST['inputitemdis'];
        $itemprice2=$_POST['inputitempreice2'];
        $itemrate  =$_POST['inputitemrate'];
        $itemdesc  =$_POST['inputitemdes'];
        $cat_id    =$_POST['category'];

        
        
       

       
        

				$imageName = $_FILES['uploadimg']['name'];
				$imageTmp	= $_FILES['uploadimg']['tmp_name'];

        $image = rand(0, 10000000000) . '_' . $imageName;
				move_uploaded_file($imageTmp, "uploads\images\\" . $image);
 
        
          try {
          $stmt = $con->prepare(" INSERT INTO shop.items(it_id,it_name,it_price,it_dis,it_dis_price,it_rate,it_desc,it_img,it_cat_id) VALUE (?,?,?,?,?,?,?,?,?) ");             
          $stmt->execute(array($itemid,$itemname, $itemprice,$itemdis,$itemprice2, $itemrate,$itemdesc, $image, $cat_id));
            $row=$stmt->fetch();
            $count=$stmt->rowCount();

            echo '<div class="container text-center ">
                  <h1 class="text-center my-5"> item has been added successfully </h1>
        
                      <a href="items.php?do=Add" class="btn btn-primary mr-3">
                      <i class="fa fa-plus"></i>  Add new item  
                      </a>
                      <a href="items.php?do=Manage" class="btn btn-primary my">
                        Manage items
                       </a>

                  
            </div>'
            ;
         }

        
         catch (Exception $e) {
          echo 'Caught exception: ',  $e->getMessage(), "\n";
    

        
        }
    }


    elseif ( $do=='Edit')

    { // edit page   

     // موجود ولا ولا ID

            
     
			$itemid = isset($_GET['it_id']) && is_numeric($_GET['it_id']) ? intval($_GET['it_id']) : 0;

			// Select All Data Depend On This ID

			$stmt = $con->prepare("SELECT * FROM shop.items WHERE it_id = ? LIMIT 1");
           
			// Execute Query

			$stmt->execute(array($itemid));
			// Fetch The Data

			$row = $stmt->fetch();
           
			// The Row Count
   
			$count = $stmt->rowCount();

			// If There's Such ID Show The Form

			if ($count > 0) { ?>
                
                
                <h1 class="text-center my-5"> Edit item</h1>
                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=Update' method='POST'>
                <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label">item name</label>
                    <input type="hidden" class="form-control" value='<?php echo $row['it_id'] ;?>' name="inputitemid" >
                    <input type="text" class="form-control" value='<?php echo $row['it_name'] ;?>' name="inputitemname" required>
                  </div>
  
                  <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label">item price</label>
                    <input type="text" class="form-control" value='<?php echo $row['it_price'] ;?>' name="inputitemprice" required>
                  </div>

                  <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label">item discount</label>
                    <input type="text" class="form-control" value='<?php echo $row['it_dis'] ;?>' name="inputitemdis" required>
                  </div>
  
                  <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label"> price after discount</label>
                    <input type="text" class="form-control" value='<?php echo $row['it_dis_price'] ;?>' name="inputitempreice2" required>
                  </div>


                  <div class="col-md-12 my-2">
                    <label for="inputcatname" class="form-label">item rate </label>
                    <input type="text" class="form-control" value='<?php echo $row['it_rate'] ;?>' name="inputitemrate" required>
                  </div>

                  <div class="col-6  my-2">
                    <label for="inputEmail4" class="form-label">description</label>
                    <textarea class="form-control" name="inputitemdes"  id="form4Example3" rows="4" required  ><?php echo $row['it_desc'];?></textarea>
                  </div>

                  <div class="col-6  my-2">
                    <label for="inputEmail4" class="form-label">image</label>
                    <textarea class="form-control" name="inputitemimg"  id="form4Example3" rows="4" required  ><?php echo $row['it_img'];?></textarea>
                  </div>

                  <div class="col-1 my-3 id ='#edit_btn' ">
                    <button type="submit" class="btn btn-primary" style="text-center"> Save </button>
                  </div>
                  </form>
              </div >
                <?php
                }
              else 
                {
                    echo ' no id etl3 bara ';
                }

     
          
    }
     
    elseif ( $do =='Update')

       { 
   
             echo '<div class="container text-center ">
                       <h1 class="text-center my-5"> Data has been updated successfully </h1>
                          <a href="items.php?do=Manage" class="btn btn-primary my">
                           Manage items
                          </a>
                 </div>'
      ;
        
        
               $itemid=$_POST['inputitemid'];
               $itemname=$_POST['inputitemname'];
               $itemprice=$_POST['inputitemprice'];

               $itemdis=$_POST['inputitemdis'];
               $itemprice2=$_POST['inputitempreice2'];
               $itemrate=$_POST['inputitemrate'];

               $itemdesc=$_POST['inputitemdes'];
               $itemimg=$_POST['inputitemimg'];
               
        

               $stmt = $con->prepare(" UPDATE shop.items SET it_name = ?, it_price = ? ,it_dis = ?, it_dis_price = ?, it_rate = ? ,it_desc = ?, it_img = ? WHERE it_id = ?  ");
               $stmt->execute(array($itemname,$itemprice,$itemdis,$itemprice2,$itemrate,$itemdesc,$itemimg,$itemid));
                 $row=$stmt->fetch();
                 $count=$stmt->rowCount();
   
           
         
   
     } 


       elseif ( $do=='Delete')

    { 
      
    
        
			$categories = isset($_GET['cat_id']) && is_numeric($_GET['cat_id']) ? intval($_GET['cat_id']) : 0;

			// Select All Data Depend On This ID

			$stmt = $con->prepare("DELETE  FROM shop.categories WHERE cat_id = ? ");

			// Execute Query

			$stmt->execute(array($categories));

			// Fetch The Data

		
                    echo '<div class="container text-center ">
                                <h1 class="text-center my-5"> category has been deleted successfully </h1>
                                <a href="item.php?do=Manage" class="btn btn-primary my">
                                         manage members
                                </a>
                            </div>'
                ;
			// The Row Count
      
		

			// If There's Such ID Show The Form
    }


    include  $tpl.'footer.php';
}
else
{
    
    header('Location: index.php'); 
    exit(); 
}
?>