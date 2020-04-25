<!DOCTYPE html>
<html>
<head>
		<link href="../../../css/emp_style.css" rel='stylesheet' type='text/css' />
</head>
 
<body >
	<div class="main">
		<form action="http://localhost/bits/index.php/hom/verifylogin" method="post">
    		<h1>Admin Login </h1>
  			<div class="inset">
	  			<p>
	    		 <label for="email">USERNAME</label>
   	 			<input type="text" name="username" placeholder="USERNAME" required/>
				</p>
  				<p>
				    <label for="password">PASSWORD</label>
				    <input type="password" name="password" placeholder="PASSWORD" required/>
  				</p>
				  
 			 </div>
 	 
			  <p class="p-container">
			    <span><a href="#">Forgot password ?</a></span>
			    <input type="submit" value="Login">
			  </p>
		</form>
	</div>  
</body>
</html>