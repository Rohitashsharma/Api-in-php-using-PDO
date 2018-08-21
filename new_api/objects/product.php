<?php   
//super class 
class Student{
     //Database connation table name 
      PUBLIC $conn;
      private $table_name = "student_api";

    //    object properties
      
     public $ID;
     public $Name;
     public $Fathers_name;
     public $Mothers_name;
     public $StudentClass;
     public $Sector;
     public $Blood_grup;
     public $Phone_Number;
     public $Sex;
     public $Record_insert_time;
     public $Student_Record_Update_Time;
     public $Show;
 



//councturuct function for DB connection
public function __construct($db)
{
    $this->conn = $db;

}

//Display all product 

public function DisplayStudent()
{
    // Query  (Display all student recourd)
    $table=$this->table_name;
  $query = "SELECT Name,Fathers_name,Mothers_name,StudentClass,Sector,Blood_grup,Phone_Number, Sex FROM $table";

 // prepare query statement
//  $statement = $this->conn->prepare($query);
 $statement = $this->conn->prepare($query);
 //execute query
$statement->execute();

return $statement;

}

public function cerateStudent()
{
// query insert data in data base 
$table=$this->table_name;
$query = "INSERT INTO $table(Name, Fathers_name, Mothers_name, StudentClass, Sector, Blood_grup,Phone_Number, Sex) 
VALUES ('".$this->Name."','".$this->Fathers_name."','".$this->Mothers_name."','".$this->StudentClass."','".$this->Sector."','".$this->Blood_grup."','".$this->Phone_Number."','".$this->Sex."')";
$statement =$this->conn->prepare($query);
if($statement->execute()){
    return true;
}

return  $query;

}

public function DeleteStudent()
    { 

        $table = $this->table_name;
    $query = "DELETE FROM  $table  WHERE ID = $this->ID";
    
    //perpare query 
    $statement =  $this->conn->prepare($query);

  if($statement->execute()){
        return true;
    }
 
        return false;
}
public function UpdateStudents()
{
   $table = $this->table_name;
      

        $query ="UPDATE  $table SET  Name= '".$this->Name."', Fathers_name =  '".$this->Fathers_name."',
        Mothers_name = '".$this->Mothers_name."', StudentClass = '".$this->StudentClass."', Blood_grup='".$this->Blood_grup."',
        Phone_Number='".$this->Phone_Number."',  Sex='".$this->Sex."', Student_Record_Update_Time ='".$this->Student_Record_Update_Time."' 
        WHERE  ID = $this->ID";
        $Statement = $this->conn->prepare($query);
  
    if($Statement->execute()){
        return true;
    }
 
        return false;

}

 public function paginetion()
{

    // query to get messages from messages table
    $table = $this->table_name;
        
    $q = "SELECT * FROM $table LIMIT $start, $per_page";
    $query = $db->prepare($q);
    $query->execute();

    if($query->rowCount() > 0){
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    // count total number of rows in students table
    $count_query = "SELECT * FROM $table";
    $query = $db->prepare($count_query);
    $query->execute();
    $count = $query->rowCount();
}
public function count()
{
    $table = $this->table_name;
  $query = "Select * from  $table";
  $query = $db->prepare( $query);
 return $query;

} 
public function pageing($start, $per_page)
{
    // Query  (Display all student recourd)
    $table=$this->table_name;
  $query = "SELECT Name,Fathers_name,Mothers_name,StudentClass,Sector,Blood_grup,Phone_Number, Sex FROM $table LIMIT $start, $per_page";

 // prepare query statement
//  $statement = $this->conn->prepare($query);
 $statement = $this->conn->prepare($query);
 //execute query
$statement->execute();

return $statement;
}
public function pagination_link($paginations,$start, $per_page,$previous,$next,$page_counter)
{
 
    if($page_counter == 0){
        $link1 = "http://localhost/new_api/product/paginaton.php?page=1";
        for($j=1; $j < $paginations; $j++) { 
        $link2="http://localhost/new_api/product/paginaton.php?page=$j";
       }
    }else{
               $link3="http://localhost/new_api/product/paginaton.php?page=$previous"; 
        for($j=($start - $per_page ); $j < ($start + $per_page ); $j++) {
         if($j == $page_counter) {
           $link4="http://localhost/new_api/product/paginaton.php?page=$j";
         }else{
        //    $link5="http://localhost/new_api/product/paginaton.php?page=$next";
        
      }if($j != $page_counter+1)
    $link6 = "http://localhost/new_api/product/paginaton.php?page=$next";
       
   } 
} 
   $result = compact("link1", "link2", "link3","link4","link5","link6");

     return $result ;
  

}
}
?>
 
 
 



 

 

  
    
