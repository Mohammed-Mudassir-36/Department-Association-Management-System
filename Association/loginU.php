<?php
session_start();
?>


<html>
<head>
      <title>Login And Registration</title>
	  <link rel="stylesheet" type="text/css" href="css/s.css">
	  <link rel="stylesheet" type="text/css" 
	  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	  
</head>
<body style="background-image:url('img/image1.jpg')">

 <div class="container">
    <div class="login-box">
    <div class="row">
    <div class="col-md-6 login-right">
	   <h2> User Login</h2>
       <form action="validationU.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" required>
        </div>
       <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

<div class="col-md-6 login-left">
	   <h2>Register </h2>
       <form action="registrationU.php" method="post">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" class="form-control" required>
        </div>
       <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
        
</div>
</div>
</div>

</body>
</html>