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
	** Check Items Function 
	*/

	function checkItem($select, $from, $value) {

		global $con;

		$statement = $con->prepare("SELECT $select FROM shop.$from WHERE $select = ?");

		$statement->execute(array($value));

		$count = $statement->rowCount();

		return $count;

	}
	/*
	** Get All Function 

	*/

	function getAllFrom($field, $table, $ordering = "DESC") {

		global $con;

		$getAll = $con->prepare("SELECT $field FROM shop.$table ORDER BY  $ordering");

		$getAll->execute();

		$all = $getAll->fetchAll();

		return $all;
	
	}