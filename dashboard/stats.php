<?php
session_start();
include_once('conn.php');
$con=$GLOBALS['connection'];
$user=$_SESSION['user'];
$rc=0;
$pc=0;
$uc=0;
$query = "SELECT * FROM user";
    	$query_run = mysqli_query($con, $query);
    	
        if($query_run){
        	$uc=mysqli_num_rows($query_run);
        }
$query2 = "SELECT * FROM resume WHERE user='$user'";
    	$query_run2 = mysqli_query($con, $query2);
    	
        if($query_run2){
        	$rc=mysqli_num_rows($query_run2);
        }
$query3 = "SELECT * FROM portfolio WHERE user='$user'";
    	$query_run3 = mysqli_query($con, $query3);
    	
        if($query_run3){
        	$pc=mysqli_num_rows($query_run3);
        }        
        if(!$query_run){
        	die();
        }
?>