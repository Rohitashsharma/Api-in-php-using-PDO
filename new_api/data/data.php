<?php 

    $start = 0; 
    $per_page = 1;
    $page_counter = 0;
    $next = $page_counter + 1;
    $previous = $page_counter - 1;
    
    if(isset($_GET['page'])){
     $start = $_GET['page'];
     $page_counter =  $_GET['page'];
     $start = $start *  $per_page;
     $next = $page_counter + 1;
     $previous = $page_counter - 1;
    }
    // if (isset($_GET['page'])) {
    //     $pageno = $_GET['page'];
    // } else {
    //     $pageno = 1;
    // }

?>