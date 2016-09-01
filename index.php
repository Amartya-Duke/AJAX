<!DOCTYPE html>
<html>
<head>
	<title>AJAX Dictionary</title>
		<style type="text/css">input{
			display: block;
			width: 90%;
			height: 30px;
			margin: 5px;
			background: #fff;
			border-radius: 3px;
			border: 1px solid #7c7c7c;
			text-align: center;
			float: left;
		}
		input#query{

			margin: 0px;
			margin-top: 10px;

		}
		fieldset{

			border:#aaa solid 1px;

		}
		input#query{
			width: auto;
		}
		input#register{
			width: 100%;
			background: #F0F0F0;
		}
		legend{
			box-shadow: 3px 3px 15px #bbb;
			border:1px solid #aaa;
			font-size: 15px;
			background: white;
			font-family: sans-serif;
			border-radius: 2px;

		}
		</style>
	
	
</head>
<body>

<script type="text/javascript">
	function searchMeaning($q){
		 var xhttp = new XMLHttpRequest();
		
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
     document.getElementById("meaning").innerHTML = xhttp.responseText;
    document.getElementById("fsmeaning").style.display=block;
    }
  };
  xhttp.open("GET", "get_meaning.php?request="+$q, true);
  xhttp.send();
	}
</script>


<div style="width: 25%; height: 200px;margin: 100px auto;">

		<form id="searchform" style="height: auto;width: 100%;padding: 5px;" >
			<fieldset style=" background: #F0F0F0 ;border-radius: 3px 3px 0px 0px ;" >
				<legend >Dictionary</legend>
			
				<input type="text" placeholder="enter word" name="word" onkeyup="searchMeaning(this.value)" id="query" >
			</fieldset>
			<fieldset  style="background: #D3DCE3;border-radius: 0px 0px 3px 3px ;display: block;"> 
				

				<span style="float: left;" id="meaning" >


				</fieldset>
			</form>
			
		</div>
</body>
</html>