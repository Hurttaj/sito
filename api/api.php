<?php 
$con = mysqli_connect("localhost","root","","Sito-PHP");
$response = array();
if($con){
    	$sql = "select * from customers";
	$result = mysqli_query($con,$sql);
	if($result){
		header("Content-Type: JSON");
		$i=0;
		while($row = mysqli_fetch_assoc($result)){
			$response[$i]['firstname'] = $row['firstname'];
			$response[$i]['lastname'] = $row['lastname'];
			$response[$i]['address'] = $row['address'];
			$response[$i]['company'] = $row['company'];
			
			$i++;
			}
		echo json_encode($response,JSON_PRETTY_PRINT);
		}

	}
else{
    echo "failed";
}
?>
