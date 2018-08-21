<?php
// File that will output  Json Data Based 
// APi headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//include database and object file 
error_reporting(0);
include_once '../config/database.php';
include_once '../objects/product.php';
include_once '../data/data.php';

//carete    
$database = new Database();
$DB = $database->getConnation();

// initialize object
$Student = new Student($DB);

// query project 
$statement = $Student->pageing($start, $per_page);
$Number    = $statement->rowCount();

   // calculate the pagination number by dividing total number of rows with per page.
       $paginations = ceil($Number  / $per_page);

  $link=$Student->pagination_link($paginations,$start, $per_page,$previous,$next,$page_counter);
  $products_arr_link = array();
    $product_arr_link["Student records link"] = array();

    array_push($product_arr_link["Student records link"], $link);
    
 
// check if more than 0 recourd found 
if ($Number > 0) {
    // produts arrry 
    $products_arr = array();
    $product_arr["Student records"] = array();

    array_push($product_arr["Student records"], $link);
    
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
//   array_push($product_arr["Student records"], $link); //Add Products_arr value in product_item array

  echo json_encode($product_arr);
     
} else {
    echo json_encode(array(
        "message" => "No Products Found."
    ));
}
?>