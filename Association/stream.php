
<html>
<head>
<title>Insert</title>
<style>
	body{
		background-color: #ABEBC6;
	}
	input{
		width: 30%;
		height:6%;
		border: 1px;
		border-radius:05px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 1px 2px 1px grey;
	}
.button {
  background-color: #28F57E;
}
</style>
</head>
  <body>
  <center><h2>ADD A NEW STREAM</h2>
	<form action='stream_ADD.php' method="post" >
	
		STREAM Name:<br>
		<input type="text" name="S_NAME" required>
		<br>
		TIME:<br>
		<input type="time" name="TIME" required>
		<br>
		DATE:<br>
		<input type="date" name="DATE" required>
		<br>
		IMPORTANCE:<br>
		<input type="text" name="IMPORTANCE" required>
		<br>
		PREREQUISITES:<br>
		<input type="text" name="PREREQ" required>
		<br><br>
		<input type="submit" class="button" value="submit">
	</form>
	</center>
  
  </body>
</html>






