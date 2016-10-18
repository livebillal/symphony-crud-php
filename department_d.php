<?php require_once ('inc/header.php'); ?>


<?php 

 use Illuminate\Database\Capsule\Manager as DB;

 
 
 // $items->id; ??????
  
 // delete data
 DB::table('departments')->where('id', '=', $id)->delete();
 
 include_once('department.php');
 
?>