<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With"); 


// include page
include_once '../config/database.php';
include_once '../objects/product.php';
 
// get connation
$database = new Database();
$db = $database->getConnation();
 
//parepare student object
 
 $Student = new Student($db);

 //get product object 
 $InputData = json_decode(file_get_contents("php://input"));

 //set id in varible
  $Student->ID = $InputData->ID;
  // delete the product
  if ($Student->DeleteStudent()) {
      echo '{';
        echo '"message":"Product was delete."';
      echo '}';  
  }
  else
  {
    echo '{';
        echo '"message":"Unable to delete object."';
    echo '}';    
  }
?>

