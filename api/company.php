<?php 
$con = mysqli_connect("localhost","root","","Sito-PHP");
$response = array();
if($con){	 
	$sql = "select * from companies";
	$result = mysqli_query($con,$sql);
	if($result){
		header('Content-Type: text/csv; charset=utf-8');  
      		header('Content-Disposition: attachment; filename=companies.csv');
		$output = fopen("php://output", "w");
		fputcsv($output, array('Company', 'Phonenumber'));  
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			fputcsv($output, $row);
			$i++;
			}
		fclose($output);  
		}

	}

