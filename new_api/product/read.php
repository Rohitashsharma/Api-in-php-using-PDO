<?php
// File that will output  Json Data Based 
// APi headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and object file 

include_once '../config/database.php';
include_once '../objects/product.php';

//carete object
$database = new Database();
$DB = $database->getConnation();

// initialize object
$Student = new Student($DB);

// query project 
$statement = $Student->DisplayStudent();
$Number    = $statement->rowCount();

// check if more than 0 recourd found 
if ($Number > 0) {
    // produts arrry 
    $products_arr = array();
    $product_arr["Student records"] = array();
    
    // fetch row using while loop 
    
    while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
        //extract row 
        extract($row);
        $product_item = array(
            "Name" => $Name,
            "Father's Name" => $Fathers_name,
            "Mothers's Name" => $Mothers_name,
            "Class" => $StudentClass,
            "Sector" => $Sector,
            "Blood Grup" => $Blood_grup,
            "Phone Number" => $Phone_Number,
            "Gender" => $Sex
            );
    array_push($product_arr["Student records"], $product_item); //Add Products_arr value in product_item array
    }
    echo json_encode($product_arr);
} else {
    echo json_encode(array(
        "message" => "No Products Found."
    ));
}
?>