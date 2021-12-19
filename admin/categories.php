<?php

/*   categories page  */
session_start();
$pageTitle=' categories';

if (isset($_SESSION['Username'])) 

{
  
    include 'init.php';
   
    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
    
    if ( $do == 'Manage')
    
    {

       $stmt = $con->prepare("SELECT * FROM  shop.categories ");
		  $stmt->execute();
		  $rows = $stmt->fetchAll();


      ?>
 
                <h1 class="text-center my-5"> Mange categories </h1>
                <div class="container">
                <table class="table table-dark table-striped table-hover table-bordered border-primary">


            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">category name</th>
                <th scope="col">category description</th>
                <th scope="col"> control categories </th>
                </tr>
            </thead>
            <tbody>
            
            <?php
                            $counter=0;      
                                foreach( $rows as $row )
                                {
                                $counter++;
                                echo  '<tr>' ; 
                                echo  '<td>' . $row['cat_id'].'</td>' ; 
                                echo  '<td>' . $row['cat_name'].'</td>' ; 
                                echo  '<td>' . $row['cat_des'].'</td>' ; 
                                echo "<td>
                                <a href='categories.php?do=Edit&cat_id=" . $row['cat_id'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                                <a href='categories.php?do=Delete&cat_id=" . $row['cat_id'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";   
                                echo "</td>";
                                echo  '</tr>' ; 
                            
                                
                            }

                            if( $counter==0)
                            {
                            
                                echo  '<tr>' ; 
                                echo  '<td colspan = "6" align="center"> no categories yet  </td>' ; 
                                echo  '</tr>' ; 
                            }

                
            ?>
            </tbody>
            </table>
                        <div class="container text-center ">
                        <a href="categories.php?do=Add" class="btn btn-primary my-3">
                            <i class="fa fa-plus"></i> New category
                        </a>
                        </div>
                </div>
                <?php
}
    elseif ( $do=='Add')
    {
      ?>
      
      <h1 class="text-center my-5"> Add new category</h1>
                <div class="container ">


                <form class="row g-3 needs-validation" novalidat action='?do=insert' method='POST'>
                <div class="col-md-6 my-2">
                    <label for="inputPassword4" class="form-label">category name</label>
                    <input type="text" class="form-control" name="inputcategoryname" required placeholder=" Input category name">
                  </div>
  
  
                <div class="col-md-12  my-2">
                    <label for="inputPassword4" class="form-label">category  description</label>
                    <textarea class="form-control" name="inputcategorydes" id="form4Example3" rows="4" required placeholder=" Input category description"></textarea>
      
                  </div>

                  
                  <div class="col-1 my-3 id ='#edit_btn' ">
                    <button type="submit" class="btn btn-primary" style="text-center"> Insert </button>
                  </div>
                  </form>
              </div >
              <?php
    }
    
    elseif ( $do=='insert')
    
    {
         
           
          $id="";
          $categoriesname=$_POST['inputcategoryname'];
          $categoriesdes=$_POST['inputcategorydes'];
   

         
          try {
          $stmt = $con->prepare(" INSERT INTO shop.categories(cat_id,cat_name,cat_des) VALUE (?,?,?) ");             
          $stmt->execute(array($id,$categoriesname, $categoriesdes));
            $row=$stmt->fetch();
            $count=$stmt->rowCount();

            echo '<div class="container text-center ">
                  <h1 class="text-center my-5"> category has been added successfully </h1>
        
                      <a href="categories.php?do=Add" class="btn btn-primary mr-3">
                      <i class="fa fa-plus"></i>  Add  another category 
                      </a>
                      <a href="categories.php?do=Manage" class="btn btn-primary my">
                        Manage categories
                       </a>

                  
            </div>'
            ;
         }

        
         catch (Exception $e) {
          echo '<div class="container text-center ">
          <h1 class="text-center my-5"> you can\'t use this name please choose another one </h1>

              <a href="categories.php?do=Add" class="btn btn-primary mr-3">
              <i class="fa fa-plus"></i>  Add  category 
              </a>
              <a href="categories.php?do=Manage" class="btn btn-primary my">
                Manage categories
               </a>

          
    </div>'
    ;

        
        }
    }


    elseif ( $do=='Edit')

    { // edit page   

     // موجود ولا ولا ID

     
			$categoryid = isset($_GET['cat_id']) && is_numeric($_GET['cat_id']) ? intval($_GET['cat_id']) : 0;

			// Select All Data Depend On This ID

			$stmt = $con->prepare("SELECT * FROM shop.categories WHERE cat_id = ? LIMIT 1");

			// Execute Query

			$stmt->execute(array($categoryid));

			// Fetch The Data

			$row = $stmt->fetch();

			// The Row Count

			$count = $stmt->rowCount();

			// If There's Such ID Show The Form

			if ($count > 0) { ?>
                
                
                <h1 class="text-center my-5"> Edit category</h1>
                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=Update' method='POST'>
                <div class="col-md-6 my-2">
                    <label for="inputcatname" class="form-label">category name</label>
                    <input type="hidden" class="form-control" value='<?php echo $row['cat_id'] ;?>' name="inputcatid" >
                    <input type="text" class="form-control" value='<?php echo $row['cat_name'] ;?>' name="inputcatname" required>
                  </div>
  


                  <div class="col-12  my-2">
                    <label for="inputEmail4" class="form-label">description</label>
                    <textarea class="form-control" name="inputcategorydes"  id="form4Example3" rows="4" required  ><?php echo $row['cat_des'];?></textarea>
                   
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
                          <a href="categories.php?do=Manage" class="btn btn-primary my">
                           Manage categories
                          </a>
                 </div>'
      ;
        
        
               $catid=$_POST['inputcatid'];
               $catname=$_POST['inputcatname'];
               $catdes=$_POST['inputcategorydes'];
             
        

               $stmt = $con->prepare(" UPDATE shop.categories SET cat_name = ?, cat_des = ?  WHERE cat_id = ?  ");
               $stmt->execute(array($catname,$catdes,$catid));
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
                                <a href="categories.php?do=Manage" class="btn btn-primary my">
                                         manage categories
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