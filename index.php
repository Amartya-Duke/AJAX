<?php 

$query=$_GET['request'];
$con = mysqli_connect('localhost','root','','dictionary') or die(mysqli_error()) ;
if (!$con) {
	echo " error connecting";
}

$sql="select * from word_list where Word = '$query'";

//echo "$sql";
$result=mysqli_query($con,$sql);
$answer="";
if($result)
		{
			$i=1;
	if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $answer= $answer."<br> ".$row["Meaning"];$i=$i+1;
      break;
    }
} 
else 
			$answer="No result";	
			
		}
		else
			$res="Internal server error";
		echo "$answer";
 ?>