<?php
$conn = new mysqli("localhost", "root", "Hacker22", "songs");
if($conn->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT s_id,s_name,sin_name,r_date,album_loc,category,plays FROM bollywood";

$result= $conn->query($sql);

if ($result->num_rows > 0) 
{
	$outp = $result->fetch_all(MYSQLI_ASSOC);
	echo json_encode($outp);
}
else
{
	echo "0 results";
}
?>