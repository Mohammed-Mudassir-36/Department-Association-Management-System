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
  <center><h2>ADD A NEW WORKSHOP</h2>
	<form action='Workshop_ADD.php' method="post" >
	
		Workshop Name:<br>
		<input type="text" name="WS_NAME" required>
		<br>
		Programming Language:<br>
		<input type="text" name="PROG_LANG" required>
		<br>
		APPLICATION:<br>
		<input type="text" name="APPLICATION" required>
		<br>
		Date:<br>
		<input type="date" name="DATE" required>
		<br>
		AVAILABLE:<br>
		<input type="text" name="AVAILABLE" required>
		<br>
		Prerequisites:<br>
		<input type="text" name="PREREQ" required>
		<br><br>
		<input type="submit" class="button" value="submit">
	</form>
	</center>
	
	
  </body>
</html>

