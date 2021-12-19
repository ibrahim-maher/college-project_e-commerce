<?php


	function getTitle()
	{
   
	   global $pageTitle ;
	   if (isset($pageTitle))
		{ echo $pageTitle ;}
		else {
		  echo  ' Default';
		}
	}
   
	function hero_img()
	{
		global $pageTitle ;
		$hero_image ='layout/images/Project/Group 13-min.jpg';
	   if ($pageTitle == "shop")
	  
		{  	
			$hero_image = 'layout/images/Project/Mask Group (2)-min(1).jpg';
			echo $hero_image;
		}
		else {
			echo $hero_image;
		  }
		
	}

	function checkUserStatus($user) {

		global $con;

		$stmtx = $con->prepare("SELECT 
									Username, RegStatus 
								FROM 
									users 
								WHERE 
									Username = ? 
								AND 
									RegStatus = 0");

		$stmtx->execute(array($user));

		$status = $stmtx->rowCount();

		return $status;

	}


	
	/*
	** Get All items Function 

	*/

	function getAllFrom($field, $table,$stat) {

		global $con;

		$getAll = $con->prepare("SELECT $field FROM shop.$table WHERE stat = ?");

		$getAll->execute(array($stat));

		$all = $getAll->fetchAll();

		return $all;
	
	}

	/*
	** Get All items between Function 

	*/

	function itemsbetween ($field, $table,$nth,$category ) {

		global $con;

		$getAll = $con->prepare("SELECT $field FROM shop.$table WHERE it_id AND it_cat_id='$category' LIMIT $nth,4 ");

		$getAll->execute();

		$all = $getAll->fetchAll();

		return $all;
	
	}

	/*
	** create table Function 

	*/

	function createtable ($name)
	{	
		
		$dsn='"mysql:host=localhost;dbname=shop"';
		$user='root';
		$pass='';
		
		$option=array(PDO::MYSQL_ATTR_INIT_COMMAND =>  "SET NAMES 'UTF8'");
		try
		{
			$conn=new PDO("mysql:host=localhost;dbname=shop",$user,$pass,$option);
			$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			
		
		}
		catch (PDOExption $e)
		{
			echo 'failed to connect '.$e->getMassege();
		}

	
		// SQL statement for creating new tables
		$statements =  "CREATE TABLE IF NOT EXISTS $name (
        item_id   INT NOT NULL, 
        user_id INT NOT NULL ,
		stat INT  DEFAULT '0' )";


	
	$conn->exec($statements);




	}


/*
	** insert to table  table Function 

	*/

	function inserttotable ($name,$item_id,$user_id)
	{	
		global $con;

		$stmt = $con->prepare("SELECT 
		item_id 
	FROM 
		shop.$name 
	WHERE 
		item_id = ? ");

$stmt->execute(array($item_id));
$row = $stmt->fetch();
$count = $stmt->rowCount();


if($count==0)
	{
		$stmt = $con->prepare(" INSERT INTO shop.$name(item_id,user_id )
		VALUE (?,?) ");
		
		$stmt->execute(array($item_id,$user_id));
		$row=$stmt->fetch();
		$count=$stmt->rowCount();
		

	}
   
		
	
	
}


/*
	** get items to cart Function 

	*/
function getitemstocart( $item_id,) {

	global $con;

	$getAll = $con->prepare("SELECT * FROM shop.items WHERE it_id = ?  ");

	$getAll->execute(array($item_id));

	$all = $getAll->fetchAll();

	return $all;

}


/*
	** delete items to cart Function 

	*/
	function deletetitemstocart( $item_id,$name) {

	global $con;
	$stmt = $con->prepare("DELETE  FROM shop.$name WHERE item_id = ? ");
	$stmt->execute(array($item_id));


	

}
	
	function updateitemtobuy($name,$item_id)
	{
		global $con;
		 $_SESSION['user'];  
		$stmt = $con->prepare(" UPDATE shop.$name SET stat= 1  WHERE item_id = ? ");
		$stmt->execute(array($item_id)); 

	}