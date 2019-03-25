
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Mayank Agrawal</title>
<link rel="stylesheet" type="text/css" href="login.css">

</head>
<body>

<div class="container" style = "padding-left: 50px">
	<h1>Welcome to Online Book Store Recommendation System</h1>
	<p>
	<div>
		<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button	>
		<?php include('server.php');?>
		<div id="id01" class="modal">
	  
	  <form class="modal-content animate" method = "post"action="login.php">
	  	<?php include('errors.php'); ?>
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <img src="img_avatar.png" alt="Avatar" class="avatar">
	    </div>

	    <div class="container">
	    	<div class = "input-group">		
	      <label><b>Username</b></label>
	      <input type="text" placeholder="Enter Username" name="username" required>
	  </div>
	      <div class = "input-group">
	      <label><b>Password</b></label>
	      <input type="password" placeholder="Enter Password" name="password" required>
	  </div>
	    <div class = "input-group">  
	      <button type="submit" name = "login_user">Login</button>
	  	</div>
	      <p>Not yet a member? <a href="register.php">Sign up</a>
    		</p>
    	
	    </div>

	    <div class="container" style="background-color:#f1f1f1">
	      <button class = "wrap" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	    </div>
	  </form>
		</div>
		<script src = "login_modal.js"></script>
	</div>
	</p>		
</div>
</body>
