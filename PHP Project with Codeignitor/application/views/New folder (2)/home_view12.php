<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="author" content="owwwlab.com">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="A theme for faculty profile page" />
        <meta name="keywords" content="faculty profile, theme,css, html, jquery, transition, transform, 3d, css3" />

        <link rel="shortcut icon" href="../favicon.ico">

        <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

        <!--CSS styles
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">  
        <link rel="stylesheet" href="css/perfect-scrollbar-0.4.5.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/style5.css">
		<link rel="stylesheet" href="css/style4.css">
        <link id="theme-style" rel="stylesheet" href="css/styles/default.css">-->
		
        <!--/CSS styles-->
        <!--Javascript files
        <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
        <script type="text/javascript" src="js/TweenMax.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="js/jquery.carouFredSel-6.2.1-packed.js"></script>
        
        <script type="text/javascript" src="js/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="js/jquery.dropdownit.js"></script>

        <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
        <script type="text/javascript" src="js/ScrollToPlugin.min.js"></script>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>

        <script type="text/javascript" src="js/jquery.mixitup.min.js"></script>

        <script type="text/javascript" src="js/masonry.min.js"></script>

        <script type="text/javascript" src="js/perfect-scrollbar-0.4.5.with-mousewheel.min.js"></script>

        <script type="text/javascript" src="js/magnific-popup.js"></script>
        <script type="text/javascript" src="js/custom.js"></script>-->

        <!--/Javascript files-->


        <!--Custom Styles for demo only-->
        <link rel="stylesheet" href="custom-style.css">
        <script type="text/javascript" src="custom-style.js"></script>
        <!--/Custom Styles-->
<script>
.addcenter{
margin-bottom:20px;
color:#0000FF
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


</script>
</head>
    <body>

        <div id="wrapper">
            <a href="#sidebar" class="mobilemenu"><i class="icon-reorder"></i></a>

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
                              <a href="#center">
                                <div class="icon icon-user"></div>
                                <div class="text">Add Center </div>
                              </a>
                            </li>  
                            
                            <li>
                              <a href="#addemployee">
                                <div class="icon icon-book"></div>
                                <div class="text">Add employee </div>
                              </a>
                            </li> 
                            
                            <li>
                              <a href="#Datetime">
                                <div class="icon icon-edit"></div>
                                <div class="text">Date and time</div>
                              </a>
                            </li> 

                            <li>
                              <a href="logout">
                                <div class="icon icon-time"></div>
                                <div class="text">
								<a href="home/logout">logout </a>
								
								</div>
                              </a>
                            </li>

                            
                        </ul>
                    </div>        
                </div>
              
			<div id="main">
            
                <div id="biography" class="page home" data-pos="home">
                    <div class="pageheader">
                        <div class="headercontent">
                            <div class="section-container">
                                
                                <div class="row">
								<div class = "addcenter">
								<h1 align="center" > ADD CENTER </h1>
								</div> 
								<form >
																			<div class="register" id="a">
																			<input type="text" class="register-input" placeholder="Emp name" maxlength="15" required>
																			<input type="text" class="register-input" placeholder="City" maxlength="10" required>
																			<input type="submit" value="Add emp" class="register-button">
																		 </div>
																		   
																		 </form>
								
								
                                </div>
                            </div>        
                        </div>
                    </div>

                    <div class="pagecontents">
                        <div class="section color-1">
                            <div class="section-container">
                                <div class="row">
										<form >
												<div class="register" id="a">
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