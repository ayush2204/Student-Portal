<?php
   require "vendor/autoload.php";
   $client = new MongoDB\Client;
   $db = $client->db_register->users;
	
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$ins = $db->insertOne([
		'username' => $_POST['username'],
		'email' => $_POST['email'],
		'phone' => $_POST['phone'],
		'pass' => $_POST['pass'],
		
	]);
	
	
   	//var_dump($ins->getInsertedId());
  }   
	
?>

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script rel="jquery" type="text/javascript" src="myjs.js"></script>    
<!--		<link rel="stylesheet" type="text/css" href="logincss.css">-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
            body{
                background: url(s2.jpg) no-repeat center center fixed;
                
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
            .log{
                padding: 30px;
                width: 800px;
                margin: 0 auto;
                margin-top: 0.5px;
                margin-bottom: 80px;
                background: transparent;
                border-radius: 10px;
                border-width: thin medium thick 10px;
                box-shadow: 5px 10px 20px ;
                font-family:Arial, Helvetica, sans-serif;
                
            }

            h1{
               font-family:Ubuntu-Regular;
               
               
            }
            .ihold{
               <!-- background: url(student.jpg);
                
                background-size: cover; -->
            }
            p{
               font-family: monospace;
               font-size: 40px;
               color: black ;
             }
           .dspan{
               font-family: monospace-Bold;
               font-size: 28px;
               color: white;
               font-weight: 900 ;
               line-height: 1.2;
               line-width: 20;
               text-align: center;
               text-transform: uppercase;

               display: block;
             }  
             .credentials{
                 font-family: monospace-Bold ;
                 width: 100%;
                 position: relative;
                 border-bottom: 1px solid #e6e6e6;
                 border-top: 1px solid #e6e6e6;
                 border-left: 1px solid #e6e6e6;
                 padding: 10px 0px;
                 background: transparent;
                 font-size: 15px;
             } 
             .for-ep{
                 font-family: monospace-Bold;
                 font-weight: 900;
                 font-size: 15px;
                 color: black;
                 width: 100%;
                  
             }
             .for-button{
                 font-family: monospace;
                 background-color: transparent;
                 border: 1px solid transparent;
             
                 padding: 15px 32px;
                 text-align: center;
                 text-decoration: none;
                 display: inline-block;
                 font-size: 20px;
                 cursor: pointer;
                 float: center;
                 margin:30px 50px ;
             } 
             .fa {
                 padding: 15px;
                 font-size: 20px;
                 width: 50px;
                 text-align: center;
                 text-decoration: none;
                 margin: 3px 2px;
             }

             .fa:hover {
                  opacity: 0.7;
             }

             .fa-facebook {
                  background: #3B5998;
                  color: white;
             }
            
             .fa-google {
                  background: #dd4b39;
                  color: white;
             }

ul {
    font-family: monospace;
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    opacity: 0.7 ;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: #0066cc;
}
.nav-down {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: fixed;
    bottom: 0;
    width: 100%;
}
.submit-btn{
    background-color: transparent ;
    border: 0.5px solid white ;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    text-align: center;
    color: white;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    }
.submit-btn:hover{
    background-color: #333;
    }
    
    </style>

</head>
<body>
<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#CourseStructure">Course Structure</a></li>
  <li><a href="#OurDemo">Our Demo</a></li>
  <li><a href="AboutUs">About Us</a></li>
  <li style="float:right"><a class="active" href="#about">User</a></li>
</ul>
<ul class="nav-down">
  <li><a class="active" href="#home">Our Blog</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">Live Chat</a></li>
</ul>
<br/>
<span class="dspan">Student Register</span>
<form method="POST" enctype="multipart/form-data" action="">
<!--<span class="dspan">Student Login</span>-->
<h2 style="text-align:center;"><?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST') 
		printf("Registered %d User!", $ins->getInsertedCount());
?></h2>
<div class="log ihold">
  <!--<span class="dspan"></span>
    <h1>Sign in:</h1><br/> -->
    <p class="for-ep">Username:</p>
<input class="credentials " type="text" id="email" name="username" placeholder="Enter Username"><br/><br/>
<p class="for-ep">Email:</p>
<input class="credentials " type="email" id="email" name="email" placeholder="Enter email address"><br/><br/>
<p class="for-ep">Phone Number:</p>
<input class="credentials " type="text" id="email" name="phone" placeholder="Enter mobile no./tel"><br/><br/>
<p class="for-ep">Password:</p>
<input class="credentials " type="password" id="pwd" name="pass" placeholder="Enter Password"><br/><br/>
<p class="for-ep">Re-Enter Password:</p>
<input class="credentials " type="password" id="pwd" name="pwd" placeholder="Re-Enter Password"><br/><br/>

    <button class="submit-btn" type="submit"  name="login" onclick="return validate();" >SignUp</button>
<br/><br/><font style="color:orange">Or&#160 </font><a href="signup.html">Sign Up&#160 </a><font style="color:orange">Using :&#160 (If already a user&#160<a href="login.php">Login</a>)</font><br/> 
<a href="#" class="fb btn">
    <i class="fa fa-facebook fa-fw"></i> Login with Facebook
</a>
<a href="#" class="google btn"><i class="fa fa-google fa-fw">
     </i> Login with Google+
</a>
</div>
</form>
</body>
</html>