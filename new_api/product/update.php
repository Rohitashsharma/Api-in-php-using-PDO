<?php 
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// include database and object files
include_once '../config/database.php';
include_once '../objects/product.php';
 
//get database connection
$database = new Database();
$db = $database->getConnation();

// prepaire product object
$Student = new Student($db);
 
$InputData = json_decode(file_get_contents("php://input"));


// set product property values 
$Student->ID = $InputData->ID;
$Student->Name = $InputData->Name;
$Student->Fathers_name = $InputData->Fathers_name;
$Student->Mothers_name = $InputData->Mothers_name;
$Student ->StudentClass = $InputData->StudentClass;
$Student ->Sector = $InputData->Sector;
$Student -> Blood_grup = $InputData ->Blood_grup;
$Student -> Phone_Number = $InputData-> Phone_Number;
$Student -> Sex = $InputData -> Sex; 
$Student -> Student_Record_Update_Time=date("Y-m-d H:i:s");

//product update 
    if($Student->UpdateStudents())
{
    echo "{";
     echo '"Message":"Student Updated."';
    echo "}"; 
}else {
    echo "[";
      echo '"message":"Student Updated fail  Technical Difficulties."';

    echo "]";  
}
?>