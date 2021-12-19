<?php

/*   members page  */
session_start();
$pageTitle=' members';

if (isset($_SESSION['Username'])) 

{
  
    include 'init.php';
   
    $do = isset($_GET['do']) ? $_GET['do'] : 'Manage';
    
    if ( $do == 'Manage')
    
    {

    $stmt = $con->prepare("SELECT * FROM  shop.users 
								WHERE GroupID != 1");

		$stmt->execute();
		$rows = $stmt->fetchAll();
      ?>
    <h1 class="text-center my-5"> Mange members</h1>
     <div class="container">
     <table class="table table-dark table-striped table-hover table-bordered border-primary">


  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Username</th>
      <th scope="col">Email</th>
      <th scope="col">Fullname</th>
      <th scope="col">controls</th>
    </tr>
  </thead>
  <tbody>

  <?php
                     $counter=0;      
                    foreach( $rows as $row )
                    {
                      $counter++;
                      echo  '<tr>' ; 
                      echo  '<td>' . $row['userID'].'</td>' ; 
                      echo  '<td>' . $row['Username'].'</td>' ; 
                      echo  '<td>' . $row['Email'].'</td>' ; 
                      echo  '<td>' . $row['FullName'].'</td>' ; 
                      
                      echo "<td>
                      <a href='members.php?do=Edit&userid=" . $row['userID'] . "' class='btn btn-success'><i class='fa fa-edit'></i> Edit</a>
                      <a href='members.php?do=Delete&userid=" . $row['userID'] . "' class='btn btn-danger confirm'><i class='fa fa-close'></i> Delete </a>";
                    
                      echo "</td>";
                      echo  '</tr>' ; 
                  
                    
                  }

                  if( $counter==0)
                  {
                   
                    echo  '<tr>' ; 
                    echo  '<td colspan = "6" align="center"> no members yet  </td>' ; 
                    echo  '</tr>' ; 
                  }

     
  ?>
  </tbody>
</table>
            <div class="container text-center ">
             <a href="members.php?do=Add" class="btn btn-primary my-3">
                <i class="fa fa-plus"></i> New Member
              </a>
              </div>
     </div>
      <?php
     }
    elseif ( $do=='Add')
    {
      ?>
      
      <h1 class="text-center my-5"> Add new Member</h1>
                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=insert' method='POST'>
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

            echo '<div class="container text-center ">
                  <h1 class="text-center my-5"> member has been added successfully </h1>
        
                      <a href="members.php?do=Add" class="btn btn-primary mr-3">
                      <i class="fa fa-plus"></i>  Add  another member 
                      </a>
                      <a href="members.php?do=Manage" class="btn btn-primary my">
                        Manage members
                       </a>

                  
            </div>'
            ;
         }

        
         catch (Exception $e) {
          echo '<div class="container text-center ">
          <h1 class="text-center my-5"> you can\'t use this username please choose another one </h1>

              <a href="members.php?do=Add" class="btn btn-primary mr-3">
              <i class="fa fa-plus"></i>  Add  member 
              </a>
              <a href="members.php?do=Manage" class="btn btn-primary my">
                Manage members
               </a>

          
    </div>'
    ;

        
        }
    }


    elseif ( $do=='Edit')

    { // edit page   

     // موجود ولا ولا ID

        
			$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;

			// Select All Data Depend On This ID

			$stmt = $con->prepare("SELECT * FROM shop.users WHERE UserID = ? LIMIT 1");

			// Execute Query

			$stmt->execute(array($userid));

			// Fetch The Data

			$row = $stmt->fetch();

			// The Row Count

			$count = $stmt->rowCount();

			// If There's Such ID Show The Form

			if ($count > 0) { ?>
                
                
                <h1 class="text-center my-5"> Edit Member</h1>
                <div class="container ">
                <form class="row g-3 needs-validation" novalidat action='?do=Update' method='POST'>
                <div class="col-md-6 my-2">
                    <label for="inputPassword4" class="form-label">Username</label>
                    <input type="hidden" class="form-control" value='<?php echo $row['userID'] ;?>' name="inputuserid" >
                    <input type="text" class="form-control" value='<?php echo $row['Username'] ;?>' name="inputusername" required>
                  </div>
  
  
                <div class="col-md-6  my-2">
                    <label for="inputPassword4" class="form-label">Full name</label>
                    <input type="text" class="form-control" value='<?php echo $row['FullName'] ;?>'   name="inputfullname" required>
                  </div>

                  

                  <div class="col-12  my-2">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" value='<?php echo $row['Email'];?>'  name="inputEmail" required>
                  </div>

                  <div class="col-12  my-2">
                    <label for="inputPassword4" class="form-label">Password</label>
                    
                    <input type="password" class="form-control" value='<?php echo $row['Password'];?>'name="newpass" required>
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
      <a href="members.php?do=Manage" class="btn btn-primary my">
            Manage members
             </a>
      </div>'
      ;
        
        
               $id=$_POST['inputuserid'];
               $user=$_POST['inputusername'];
               $email=$_POST['inputEmail'];
               $full=$_POST['inputfullname'];
               $pass=$_POST['newpass'];
               
        

               $stmt = $con->prepare("UPDATE shop.users SET Username = ?, Email = ?, FullName = ? ,Password = ? WHERE userID = ?  ");
               $stmt->execute(array($user, $email,$full, $pass,$id));
                 $row=$stmt->fetch();
                 $count=$stmt->rowCount();
   
           
         
   
       } 


       elseif ( $do=='Delete')

    { 
      
      // edit page   

     // موجود ولا ولا ID

        
			$userid = isset($_GET['userid']) && is_numeric($_GET['userid']) ? intval($_GET['userid']) : 0;

			// Select All Data Depend On This ID

			$stmt = $con->prepare("DELETE  FROM shop.users WHERE userID = ? ");

			// Execute Query

			$stmt->execute(array($userid));

			// Fetch The Data

		
      echo '<div class="container text-center ">
      <h1 class="text-center my-5"> member has been deleted successfully </h1>
      <a href="members.php?do=Manage" class="btn btn-primary my">
            Manage members
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