<?php

$con = mysqli_connect('localhost','root','','dictionary') or die(mysqli_error()) ;
if (!$con) {
	echo " error connecting";
}
if ($_GET['wordlist']) {


$file = fopen($_GET['wordlist'],"r");
$i=0;$j=0;
 while(! feof($file))
  {
   $line= fgets($file);  //get single line and move pointr to next line // fgetc($file) reads a character at a time


$pos=strpos($line, " ");

$token1=substr($line, 0, $pos+1);

$meaning=substr($line, $pos+1);

//echo "$meaning";
if($token1!=" ")
$sql="insert into word_list (Word,Meaning) values ('$token1','$meaning')";

//echo "$sql<br>";
		$result=mysqli_query($con,$sql);
		if ($result) {
			$j=$j+1;
		}
		else { $i=$i+1;};

  }
echo "Inserted:$j Error:$i";

fclose($file);
}
else
	echo "<br><br><br>Enter URL in correct format : http://127.0.0.1:8086/ajax/load_into_database.php?wordlist=wordlist.txt\n\n\n";
?> 