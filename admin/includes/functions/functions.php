<?php
 /* get  titel   */
 function getTitle()
 {

    global $pageTitle ;
    if (isset($pageTitle))
     { echo $pageTitle ;}
     else {
       echo  ' Default';
     }
 }

 /* Count Number Of Items Function */

 function countItems($item, $table) {

  global $con;

  $stmt2 = $con->prepare("SELECT COUNT($item) FROM shop.$table");

  $stmt2->execute();

  return $stmt2->fetchColumn();

}



/* Count price after discount in  Items  */

function price_after ($price,$discount) {

   $price_after;
   $price_after=$price-(($discount/$price)/100);
  return $price_after;

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