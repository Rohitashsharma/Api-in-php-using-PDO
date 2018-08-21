<?php 
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// get database connection
include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/product.php';
 
$database = new Database();
$db = $database->getConnation();
 
$Student = new Student($db);    
 
// get posted data
//  data: 'f=json&features=' + jsonTempStringified,
$InputData = json_decode(file_get_contents("php://input"));

// set products property  value 

  $Student->Name = $InputData->Name;
  $Student->Fathers_name = $InputData->Fathers_name;
  $Student->Mothers_name = $InputData->Mothers_name;
  $Student->StudentClass = $InputData->StudentClass;
  $Student->Sector = $InputData->Sector; 
  $Student->Blood_grup = $InputData->Blood_grup;
  $Student->Phone_Number = $InputData->Phone_Number;
  $Student->Sex = $InputData->Sex;
//   $Student ->Record_insert_time=date("Y-m-d H:i:s");

//cerete the product
 if($Student->cerateStudent())
 {
     echo '{';
         echo '"Message":"Product Was Created"';
     echo '}';    
 }    
 else
 {
     echo '{';
         echo '"Message":"Unable to create Product."';
     echo '}';    
         }
?>