<?php
include_once dirname(__file__)."/db.php";
include_once dirname(dirname(__file__))."/query_cache/cache_handler.php";


function getUniqueCities()
{
	global $conn;
	$query="select distinct(town) as town from listings";
	$responseData=query_exec($query);
	
	return $responseData;

}


function getStoreNamesFromCity($town)
{
	global $conn;
	$query="select id,store_name,rating,address from listings where town='$town'";
	$responseData=query_exec($query);
	
	
	return $responseData;
}


function getBussinessDetailsById($id)
{
	global $conn;
	$query="select * from listings where id='$id'";
	
	$context=mysqli_query($conn,$query);
	$data=mysqli_fetch_assoc($context);
	
	return $data;


}	