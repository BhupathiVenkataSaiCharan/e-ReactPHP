 <?php
include 'connect.php';

$postdata = file_get_contents("php://input",true);

if(isset($postdata) && !empty($postdata)){
	
	$request=json_decode($postdata);


$fName = $request->first_name;
$lName = $request->last_name;
$email = $request->email;

$sql =  "INSERT INTO `students`(`fName`, `lName`, `email`) VALUES ('$first_name','$last_name','$email')";	
	
 if (mysqli_query($conn, $sql)){
	 http_response_code(201);
 }
 else{
	 http_response_code(422);
 }
}
    mysqli_close($conn);


?>