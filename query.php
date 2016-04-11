<!-- author :Shubham Singh github : https://github.com/SamWinchester -->

<!DOCTYPE html>
<html>
<head>
	<title>query page</title>
	<style type="text/css">
input{
	width: 200px;
height: 35px;
}
button{
	width: 10%;
	border: 1px solid black;
	border-radius: 7px;
	height: 35px;
}
body{
	margin:50px;
}

tr{
height: 50px;
padding: 15px;

}
table{
	margin: 10px;
	padding: 15px;
	text-align: center;
	font-weight: bold;
}

	</style>


</head>
<body><center>
<form action=post_query.php method="post">
OUTPUT ON THE BASIS OF : <br>
<input name="contact" placeholder="enter the contact number ">
<br><hr><p>OR</p>
<input name="Name" placeholder="Enter the name of the candidate"></input>
<p>STATUS :<br>
	<input style="width:8%;height:25px; "type="radio" name="ST" value="REJECTED" >REJECTED</input>
		
	<input style="width:8%;height:25px; " type="radio" name="ST" value="IN-PROCESS">IN-PROCESS</input>
	
	<input style="width:8%;height:25px; " type="radio" name="ST" value="ACCEPTED">ACCEPTED</input>
	</p>
	<button name="submit">SUBMIT</button>
	<button name="export">export</button>
</form>
</center>
</body>
</html>
