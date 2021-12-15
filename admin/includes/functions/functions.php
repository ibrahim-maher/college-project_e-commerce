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

 /* Count Number Of Items Function */

 function countItems($item, $table) {

  global $con;

  $stmt2 = $con->prepare("SELECT COUNT($item) FROM shop.$table");

  $stmt2->execute();

  return $stmt2->fetchColumn();

}

