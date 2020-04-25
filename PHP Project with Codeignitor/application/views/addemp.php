<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
    <style>
/* form table style */

table {
  border-collapse: collapse;
  border-spacing: 0;
}

body {
  font: 14px/20px 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: #404040;
  background: #2d4259;
}

.addcenter{
margin-bottom:20px;
color:#0000FF
}

.hideclass{
	display: none;
}

.showclass{
	display: block;
}

.register-title {
  width: 270px;
  line-height: 43px;
  margin: 50px auto 20px;
  font-size: 19px;
  font-weight: 500;
  color: white;
  color: rgba(255, 255, 255, 0.95);
  text-align: center;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  background: #d7604b;
  border-radius: 3px;
  background-image: -webkit-linear-gradient(top, #dc745e, #d45742);
  background-image: -moz-linear-gradient(top, #dc745e, #d45742);
  background-image: -o-linear-gradient(top, #dc745e, #d45742);
  background-image: linear-gradient(to bottom, #dc745e, #d45742);
  -webkit-box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), inset 0 0 0 1px rgba(255, 255, 255, 0.05), 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
}

.center {
  width: 270px;
  line-height: 30px;
  margin: 10px auto;
  font-size: 19px;
  font-weight: 500;
  color: white;
  color: rgba(255,0,0, 0.95);
  text-align: center;
  text-shadow: 0 1px rgba(0, 0, 0, 0.3);
  border-radius: 3px; 
}

.register {
  margin: 0 auto;
  width: 400px;
  padding: 20px;
  background:   #f4f4f4;
  border-radius: 3px;
  -webkit-box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
  box-shadow: 0 0 1px 1px rgba(0, 0, 0, 0.1), 0 1px 3px rgba(0, 0, 0, 0.3);
}

input {
  font-family: inherit;
  font-size: inherit;
  color: inherit;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.register-input {
  display: block;
  width: 100%;
  height: 38px;
  margin-top: 2px;
  font-weight: 500;
  background: none;
  border: 0;
  border-bottom: 1px solid #d8d8d8;
}
.register-input:focus {
  border-color: #1e9ce6;
  outline: 0;
}

.register-button {
  display: block;
  width: 100%;
  height: 42px;
  margin-top: 25px;
  font-size: 16px;
  font-weight: bold;
  color: #494d59;
  text-align: center;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: #fcfcfc;
  border: 1px solid;
  border-color: #d8d8d8 #d1d1d1 #c3c3c3;
  border-radius: 2px;
  cursor: pointer;
  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
  -webkit-box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
  box-shadow: inset 0 -1px rgba(0, 0, 0, 0.03), 0 1px rgba(0, 0, 0, 0.04);
}
.register-button:active {
  background: #eee;
  border-color: #c3c3c3 #d1d1d1 #d8d8d8;
  background-image: -webkit-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -moz-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: -o-linear-gradient(top, #eeeeee, #fcfcfc);
  background-image: linear-gradient(to bottom, #eeeeee, #fcfcfc);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.03);
}
.register-button:focus {
  outline: 0;
}

.register-switch {
  height: 32px;
  margin-bottom: 15px;
  padding: 4px;
  background: #6db244;
  border-radius: 2px;
  background-image: -webkit-linear-gradient(top, #60a83a, #7dbe52);
  background-image: -moz-linear-gradient(top, #60a83a, #7dbe52);
  background-image: -o-linear-gradient(top, #60a83a, #7dbe52);
  background-image: linear-gradient(to bottom, #60a83a, #7dbe52);
  -webkit-box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
  box-shadow: inset 0 1px rgba(0, 0, 0, 0.05), inset 1px 0 rgba(0, 0, 0, 0.02), inset -1px 0 rgba(0, 0, 0, 0.02);
}

.register-switch-input {
  display: none;
}

.register-switch-label {
  float: left;
  width: 50%;
  line-height: 32px;
  color: white;
  text-align: center;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.2);
  cursor: pointer;
}
.register-switch-input:checked + .register-switch-label {
  font-weight: 500;
  color: #434248;
  text-shadow: 0 1px rgba(255, 255, 255, 0.5);
  background: white;
  border-radius: 2px;
  background-image: -webkit-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -moz-linear-gradient(top, #fefefe, #eeeeee);
  background-image: -o-linear-gradient(top, #fefefe, #eeeeee);
  background-image: linear-gradient(to bottom, #fefefe, #eeeeee);
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), 0 0 0 1px rgba(0, 0, 0, 0.1);
}

body {
	font-size: 16px;
	font-family: 'Lato', sans-serif;
	font-weight: 400;
	background: #4D4D4D;
}

/* layout
 **************************************************/
#main-nav {
	text-align: left;
	vertical-align: top;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
	width: 250px;
	background: #2b2b2b;
	position: absolute;
	left: 0;
	top: 0;
	bottom: 45px;
	overflow: hidden;
}

#main {
	position: absolute;
	left: 250px;
	right: 0;
	top: 0;
	bottom: 0;
	background: #fefefe;
	overflow: hidden;
}

.page {
	overflow: auto;
	position: absolute;
	top: 0;
	left: 2000px;
	bottom: 0;
	width: 85%;
	background-color: #f7f7f7;
}

.home {
	left: 0px;
	z-index: 0;
	width: 100%;
}

#overlay {
	position: absolute;
	top: 0;
	left: 0px;
	bottom: 0;
	right: 0px;
	background-color: #000;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=25)";
	filter: alpha(opacity=25);
	opacity: 0.25;
	display: none;
	z-index: 300;
	cursor: crosshair;
	cursor: url(../img/pointer.png), auto;
}

#runner {
	position: absolute;
	width: 30px;
	height: 20px;
	color: #fff;
	font-size: 20px;
	z-index: 2000;
}

.currentpage {
	-webkit-box-shadow: -2px 0 4px -2px rgba(0,0,0,.25);
	box-shadow: -2px 0 4px -2px rgba(0,0,0,.25);
}


/* sidebar
 **************************************************/
#nav-container {
	position: relative;
	padding-bottom: 75px;
	bottom: 0;
	height: 100%;
}

#profile {
	text-align: center;
	padding: 30px 10px;
	position: relative;
}

#profile .portrate {
	background-image: url(../img/jennifer-doe.jpg);
	width: 125px;
	margin: 0 auto;
	height: 125px;
	border-radius: 50%;

	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
}

#profile .title h2 {
	font-size: 28px;
	font-weight: 300;
	color: #fff;
	margin: 20px 0 10px 0;
}

#profile .title h3 {
	font-size: 18px;
	font-weight: 300;
	color: #aaa;
	margin: 0px 0 10px 0;
}

ul#navigation {
	padding: 0;
	margin: 0;
}

ul#navigation li {
	display: block;
	float: none;
	clear: both;
	background: #303030;
	border-top: 1px solid #373737;
	border-bottom: 1px solid #2B2B2B;

	-webkit-transition: background 0.5s;
	-moz-transition: background 0.5s;
	-o-transition: background 0.5s;
	-ms-transition: background 0.5s;
	transition: background 0.5s;
}

ul#navigation li a {
	color: #ccc;
	font-size: 14px;
}

ul#navigation li:hover,ul#navigation li:focus {
	background: #363636;
}

ul#navigation li:hover a,ul#navigation li:focus a {
	color: #f7f7f7;
}

ul#navigation .currentmenu {
	font-weight: bold;
}

ul#navigation li.currentmenu a {
	color: #fff;
}

/*ul#navigation li.external:hover .icon, ul#navigation li.currentmenu .icon{
	color: #03cc85;
}*/

ul#navigation li.currentmenu {
	background: #363636;
	border-top: 1px solid #3d3d3d;
	border-bottom: 1px solid #252525;
}


ul#navigation li .text {
	padding-left: 5%;
	margin-left: 50px;
	line-height: 45px;

	-webkit-box-shadow: -3px 0 5px -4px #000;
	box-shadow: -3px 0 5px -4px #000;
}

ul#navigation li .icon {
	float: left;
	line-height: 45px;
	width: 50px;
	text-align: center;
	font-size: 27px;
}

.social-icons {
	position: absolute;
	bottom: 0;
	left: 0;
	width: 100%;
	background: #202020;
	border-top: 1px solid #1A1A1A;
	width: 250px;
	z-index: 2;
	height: 45px;
}

.social-icons ul {
	padding: 0;
	margin: 0;
	list-style: none;
}

.social-icons li {
	float: left;
	width: 33%;
	padding: 10px;
	text-align: center;
}

.social-icons a {
	color: #ccc;
}

.social-icons a:hover,.social-icons a:focus {
	color: #fff;
}

.social-icons i {
	font-size: 16px;
}


/* page specifics
 **************************************************/
.page-container {
	position: relative;
}

.pageheader {
	background: #f3f3f3;
	position: relative;
	padding: 60px 0 45px 0;
}

.pageheader:after {
	top: 100%;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-color: rgba(8, 4, 13, 0);
	border-top-color: #f3f3f3;
	border-width: 30px;
	left: 50%;
	margin-left: -30px;
	z-index: 1;
}

.headercontent .title {
	font-size: 50px;
	margin-bottom: 25px;
	border-bottom: 1px solid #ccc;
	padding: 0 0 20px 0;
}

.headercontent .subtitle {
	border-bottom: 1px solid #ccc;
	margin: 0 0 10px 0;
	padding: 5px 0;
}

.headercontent .subtitle h3 {
	margin: 0;
	padding: 0;
}

.page .section {
	padding: 70px 0;
	position: relative;
}

.section-container {
	padding: 0 10%;
}

.color-1 {
	background: #fcfcfc;
}

.color-2 {
	background: #f7f7f7;
}

.color-3 {
	background: #2c2c2d;
	color: #fff;
}

.color-4 {
	background: #000;
}

.section .title {
	border-bottom: 1px solid #ccc;
	margin: 0 0 30px 0;
	padding: 20px 0;
}

.section .title h3 {
	padding: 0;
	margin: 0;
	font-size: 26px;
}


.biothumb{position: relative;}
.biothumb .overlay{
	position: absolute;
	width: 100%;
	color:#fff;
	bottom: 0;
	background-color: black;
	background-color: rgba(0,0,0,0.5);
	padding:25px;
}
.biothumb .overlay h1{
	font-size: 45px;
}

h1 {
    color: orange;
    text-align: center;
}

p {
    font-family: "Times New Roman";
    font-size: 20px;
}
</style>
</head>
    <body>

        <div id="wrapper">
            <div id="sidebar">
                <div id="main-nav">
                    <div id="nav-container">
                        <div id="profile" class="clearfix">
                            <div><img src="" height="125" width="125"></div>
                            <div class="title">
                                <h2>Admin</h2>
                                
                            </div>
                            
                        </div>
                        <ul id="navigation">
                            <li>
                              <a href="http://localhost/bits/index.php/hom/abc">
                                <div class="icon icon-user"></div>
                                <div class="text">Add Center </div>
                              </a>
                            </li>  
                            
                            <li>
                              <a href="http://localhost/bits/index.php/hom/admin_addemp">
                                <div class="icon icon-book"></div>
                                <div class="text">Add employee </div>
                              </a>
                            </li> 
                            
                            <li>
                              <a href="http://localhost/bits/index.php/hom/admin_regioperation">
                                <div class="icon icon-time"></div>
                                <div class="text">Registration Operation</div>
                              </a>
                            </li> 

                            <li>
                              <a href="http://localhost/bits/index.php/hom/admin_logout">
                                <div class="icon icon-time"></div>
                                <div class="text">Logout</div>
                              </a>
                            </li>

                            
                        </ul>
                    </div>        
                </div>
              
			<div id="main">
            
                <!--<div id="biography" class="page home" data-pos="home">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">-->

								<div id="empclass" style="margin-top:170px">
										<div class = "addcenter">
										<h1 align="center" style="color:black"> ADD EMP </h1>
										</div>
										<form action="http://localhost/bits/index.php/hom/addemp" method="post">
												<div class="register">
												<input type="text" name="emp_name" class="register-input" placeholder="Emp name" maxlength="15" required>
												<input type="text" name="emp_city" class="register-input" placeholder="City" maxlength="10" required>
												<input type="date" name="emp_dob" class="register-input" placeholder="date of birth" maxlength="10" required>
												<input type="text" name="emp_username" class="register-input" placeholder="USERNAME" maxlength="20" required>
												<input type="password" name="emp_password" class="register-input" placeholder="PASSWORD" maxlength="20" required>
												<input type="email" name="emp_email" class="register-input" placeholder="EMAIL" maxlength="20" required>
												<input type="submit"  value="Add emp" class="register-button">
												</div>
																		   
										</form>
										<h6 align="center" >
									<?php 
										if(isset($data))
											{
												echo $data;
											}
									?>
									</h6>
								</div>

								
								<!--</div>
							
                                </div>
                            </div>        
                        </div>
                    </div>-->
				
                    <!--<div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
                                	<div id="">
										<form >
												<div class="register">
												<input type="text" class="register-input" placeholder="Emp name" maxlength="15" required>
												<input type="text" class="register-input" placeholder="City" maxlength="10" required>
												<input type="submit" value="Add emp" class="register-button">
												</div>
																		   
										</form>
									</div>
								     </div>    
                            </div>
                                
                        </div>

                        </div>                            
                    </div>-->
                </div>
				
				<!--research-->
				
                <!--publications-->
				
				<!--teaching-->
				
				<!--gallery-->
                
				<!--contact-->
			</div>
        </div>

    </body>
</html>