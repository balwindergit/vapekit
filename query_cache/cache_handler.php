<?php

include_once dirname(dirname(__file__))."/config/db.php";


function query_exec($query)
{
	global $conn;
	
	$querybase64=base64_encode($query);
	$data=array();
	if(!file_exists(dirname(__file__)."/$querybase64.txt"))
	{
		
		$context=mysqli_query($conn,$query);
		
		while($res=mysqli_fetch_assoc($context))
		{
			$data[]=$res;
		}
		$encodedData=json_encode($data);
		file_put_contents(dirname(__file__)."/$querybase64.txt",$encodedData);
	}
	else
	{
		$data=json_decode(file_get_contents(dirname(__file__)."/$querybase64.txt"),true);
		return $data;
	}
	
	return $data;
	
}