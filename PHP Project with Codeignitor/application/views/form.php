<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <title>Registration Form</title>
  <link rel="stylesheet" href="../../css/style2.css">
</head>

<body bgcolor="#000000">
  <h1 class="register-title">Welcome</h1>
  
  <form action="http://localhost/bits/index.php/hom/addstudent" method="post">
	<div class="register" id="a">
    <input type="text" class="register-input" name="first" placeholder="FIRST NAME" maxlength="15" required>
	<input type="text" class="register-input" name="last" placeholder="LAST NAME" maxlength="10" required>
	Date Of Birth:<input type="date" class="register-input" name="dob" placeholder="Date Of Birth" max="1998-05-01" min="1994-05-01" required>
	<!--<input type="date" class="register-input" placeholder="DATE OF BIRTH" max="01-05-1998" max="01-05-1994">-->
	
	<div class="register-switch">
      <input type="radio" name="sex" value="F" id="sex_f" class="register-switch-input" checked>
      <label for="sex_f" class="register-switch-label">Female</label>
      <input type="radio" name="sex" value="M" id="sex_m" class="register-switch-input">
      <label for="sex_m" class="register-switch-label">Male</label>
    </div>
	
	<input type="email" name="email" class="register-input" placeholder="Email address" required>
	
	<div class="register-switch">
      <input type="radio" name="nationality" value="I" id="i" class="register-switch-input" checked>
      <label for="i" class="register-switch-label">Indian</label>
      <input type="radio" name="nationality" value="F" id="f" class="register-switch-input">
      <label for="f" class="register-switch-label">Foreign</label>
    </div>
	
	<input type="text" class="register-input" name="city" placeholder="City" required>
	<input type="number" class="register-input" name="pincode" placeholder="Pin code" required>
	
	<select name="state" class="register-input">
		<script language="javascript">
			var states = new Array("--select state--", "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh",
			"Chhattisgarh", "Dadra and Nagar Haveli", "Daman and Diu", "Delhi", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", 
			"Jharkhand", "Karnataka", "Kerala", "Lakshadweep", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", 
			"Orissa", "Pondicherry", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Tripura", "Uttaranchal", "Uttar Pradesh", "West Bengal");

			for(var hi=0; hi<states.length; hi++)
				document.write("<option value=\""+states[hi]+"\">"+states[hi]+"</option>");
		</script>
	</select>
	
	<input type="number" class="register-input" name="phone" placeholder="Phone no." required>
	<input type="password" class="register-input" name="password" placeholder="Password" required>
	<input type="password" class="register-input" name="cpassword"placeholder="CONFIRM Password" required>
	
  
	</div>
	
	<h1 class="register-title">12th Exam Detail</h1>
  
<div class="register">
  	<input type="text" class="register-input" name="school" placeholder="Name of school presently studying in/last attended" required>
	<input type="number" class="register-input" name="percent" placeholder="Enter the % of PCM should be >75%" min="75" required>
	
	<select class="register-input" name="passingyear" >
		<option value="0">--Select year of passing--</option>
		<option value="2015">2015</option>
		<option value="2014">2014</option>
	</select>
	
	<h1 class="center">Test Centre Preferences</h1>
	
	<select name="Preferences_1" class="register-input" >
		<option value="0">--Preferences 1--</option>
		
		<?php
				foreach ($result as $key) {
					echo '<option vlaue="'.$key->city.'"">'.$key->city.'</option>' ;
				}
				
		?>

    </select><br>
	
	<select name="Preferences_2" class="register-input">
		<option value="0">--Preferences 2--</option>
		<?php
				foreach ($result as $key) {
					echo '<option vlaue='.$key->city.'>'.$key->city.'</option>' ;
				}
				
		?>
    </select><br>
	
	<select name="Preferences_3" class="register-input" >
		<option value="0">--Preferences 3--</option>
		<?php
				foreach ($result as $key) {
					echo '<option vlaue='.$key->city.'>'.$key->city.'</option>' ;
				}
				
		?>
    </select><br>
	
	<input type="submit" value="Register" class="register-button">
 </div>
   
 </form>
</body>
</html>
