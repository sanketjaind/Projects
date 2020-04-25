<!DOCTYPE html>
<html lang="en" class="no-js">

    <head>

        <meta charset="utf-8">
        <title>student Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSS -->
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=PT+Sans:400,700'>
        <link rel="stylesheet" href="../../css/reset.css">
        <link rel="stylesheet" href="../../css/supersized1.css">
        <link rel="stylesheet" href="../../css/style.css">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>

    <body background="../../images/login.jpg">

        <div class="page-container">
            <h1 style="color:#00FF00">Login</h1>
            
   			<form action="http://localhost/bits/index.php/hom/student_verify" method="post">
                <input type="text" name="username" class="username" id="username" placeholder="Roll No.">
                <input type="password" name="password" class="password" id="passowrd" placeholder="Password">
                <button type="submit">Sign me in</button>
                <div class="error"><span>+</span></div>
            </form>
            

        <!-- Javascript -->
        <script src="C:/wamp/www/bits/js/jquery-1.8.2.min.js"></script>
        <script src="C:/wamp/www/bits/js/supersized.3.2.7.min.js"></script>
        <script src="C:/wamp/www/bits/js/supersized-init.js"></script>
        <script src="C:/wamp/www/bits/js/scripts.js"></script>

    </body>

</html>

