<?php
if($_GET['fname'] != null){
    $fname = $_GET['fname'];
    header("Content-type:application");
    header("Content-Disposition: attachment; filename=" . $fname); 
    readfile('./results/' . $fname);   
}
?>
