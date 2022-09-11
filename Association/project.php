
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
  <center><h2>ADD A NEW PROJECT </h2>
	<form action='project_ADD.php' method="post" >
	
		Project Name:<br>
		<input type="text" name="P_NAME" required>
		<br>
		TEAM:<br>
		<input type="text" name="TEAM" required>
		<br>
		YEAR:<br>
		<input type="text" name="YEAR" required>
		<br>
		Application:<br>
		<input type="text" name="APPLICATION" required>
		<br>
		GUIDE:<br>
		<input type="text" name="GUIDE" required>
		<br><br>
		<input type="submit" class="button" value="submit">
	</form>
	</center>
	
	
  </body>
</html>






