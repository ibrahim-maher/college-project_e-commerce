<?php
$pageTitle = 'login';
include 'init.php';

$do = isset($_GET['do']) ? $_GET['do'] : 'Add';


if ( $do=='Add') 
{
?>
 


<h1 class="text-center my-5"> sign up </h1>

                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=insert'  method='POST'>
                <div class="col-md-6 my-2">
                    <label for="inputPassword4" class="form-label">Username</label>
                    <input type="text" class="form-control" name="inputmembername" required placeholder=" Input member name">
                  </div>
  
  
                <div class="col-md-6  my-2">
                    <label for="inputPassword4" class="form-label">Full name</label>
                    <input type="text" class="form-control"  name="inputmemberfullname" required placeholder=" Input member full name">
                  </div>

                  

                  <div class="col-12  my-2">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control"  name="inputmemberEmail" required placeholder=" Input member email">
                  </div>

                  <div class="col-12  my-2">
                    <label for="inputPassword4" class="form-label">Password</label>
                    
                    <input type="password" class="form-control"  name="membernewpass" required placeholder=" Input member password">
                  </div>
                  <div class="col-1 mt-3 mb-5 id ='#edit_btn' ">
                    <button type="submit" class="btn btn-primary" style="text-center"> sign up  </button>
                  </div>
                  </form>
 </div >

<?php
}
 elseif ( $do=='insert')
    
{
         $id="";
          $usermember=$_POST['inputmembername'];
          $emailmember=$_POST['inputmemberEmail'];
          $fullmember=$_POST['inputmemberfullname'];
          $passmember=$_POST['membernewpass'];

         
          try {
          $stmt = $con->prepare(" INSERT INTO shop.users(userID,Username,Email,FullName,Password )
                        VALUE (?,?,?,?,?) ");
                        
          $stmt->execute(array($id,$usermember, $emailmember,$fullmember, $passmember));
            $row=$stmt->fetch();
            $count=$stmt->rowCount();
            
          // Register User ID in Session

			    // Redirect To Dashboard Page

          

            echo '<div class="container text-center  " style="height:500px">
                  <h1 class="text-center my-5"> you are login successfully </h1>
        
                      <a href="login.php?" class="btn btn-primary mr-3">
                      </i>  login now  
                      </a>
                     
  
            </div>'
            ;
         }

        
         catch (Exception $e) 
         {
          echo '<div class="container text-center " style="height:500px" >
          <h1 class="text-center my-5"> you can\'t use this username please choose another one </h1>

              <a href="login.php?do=Add" class="btn btn-primary mr-3">
              </i>  login again
              </a>
             
            </div>';

        
         }
}





    include $tpl .'footer.php';

