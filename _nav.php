<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

 <style>
 
  /*{
    padding:0;
    margin:0;
  }
  body{
    font-family:'poppins'
  }
  nav{
  height:100px;
  display: flex;
  justify-content: space-between;
    
  }
  nav img{
    position:absolute;
    top:8px;
    left:5%;
    color:black;
    text-transform:uppercase;
    float:left;
  }
  nav ul{
    float:right;
    margin-right:25px;
    list-style:none;

  }
  nav ul li{
    display:inline-block;
    line-height:80px;
    padding:20px;

  }
  nav ul li a{
    position:relative;
    padding:5px 0px;
    color:black;
    font-size:18px;
    text-decoration:none;
   
    
  }
  label #sign-one,
  label #sign-two{
  font-size:30px;
  float:right;
  line-height:50px;
  margin-right:30px;
  cursor: pointer;
  display:none;
}
#res-menu{
  display:none;
}
@media(max-width:870px){
  label #sign-one{
   display: block;
   
   
       

    
  }
  nav ul{
    position:fixed;
    width:100%;
    height:100vh;
    background:black;
    top:50px;
    left:-100%;
    text-align:center;
    transition:.5s;
    z-index:10;


  }
  nav ul li{
    display:block;
    margin:40px 0px;
    line-height:30px;

  }
  nav ul li a{
    font-size:20px;
    color:white;

  }
  #res-menu:checked ~ ul{
    left:0;
  }
  #res-menu:checked ~ label #sign-one{
    display:none;
  }
  #res-menu:checked ~ label #sign-two{
    display:block;
  }
}
*/


.menu-area {
	background: #fff;
	height: 62px;
	width: 100%;
  overflow:hidden;
}
.logo {
  height:auto;
  transform:translateY(-10%);
}
.menu-area ul {
	float: right;
}
.menu-area ul li {
	display: inline-block;
	line-height: 60px;
	margin: 0 5px;
}
.menu-area ul li a{
	color: black;
	font-size: 14px;
	padding: 22px 15px;
	text-transform: uppercase;
	font-weight: bold;
  text-decoration:none;
}
.menu-area ul li a:not(.btn-1,.btn-2):hover {
	background: darkseagreen;
	transition: .5s;
}
.btn-area {
	font-size: 30px;
	color: black;
	float: right;
	line-height: 62px;
	margin-right: 40px;
	cursor: pointer;
	display: none;
}
#custom-menu {
	display: none;
}
@media (max-width: 860px) {
	.btn-area {
		display: block;
	}
	.menu-area ul {
		position: absolute;
		width: 100%;
		height: 100vh;
		background: black;
		top: 62px;
		left: -100%;
		text-align: center;
		transition: all .5s;
    z-index: 1;
	}
  .btn-1,.btn-2{
    display:inline-flex;
  }
	.menu-area ul li:not(.btn-1,.btn-2) {
		display: block;
		margin: 0;
		line-height: 10px;
		padding: 25px 0;
	}
 
 
	.menu-area ul li a {
		font-size: 20px;
    color:white;

	}
	.menu-area ul li:hover {
		background: #000;
	}
	.menu-area ul li a:hover {
		background: none;
	}
	#custom-menu:checked~ul {
		left: 0;
	}
}


 #logo{
height:auto;
  }
  .btn-1,.btn-2{
  background: rgb(2,0,36);
   background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(139,114,255,1) 100%, rgba(0,212,255,1) 100%); 
   border-radius:3px;
    
  }
  .btn{
    background: rgb(2,0,36);
   background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(139,114,255,1) 100%, rgba(0,212,255,1) 100%); 
  }

  
  </style>
</head>
<body>
<div class="col-12 col-sm-12 col-md-12 col-lg-12 menu-area">
		<input id="custom-menu" type="checkbox"> <label class="btn-area" for="custom-menu"><i class="fa fa-bars"></i></label> <label class="logo"><a href="index.php"><img src="images/tutorial point logo.png" width="100px" height="100px"></a></label>
		<ul>
			<li>
				<a href="#">Laravel</a>
			</li>
			<li>
				<a href="#">Java</a>
			</li>
			<li>
				<a href="#">Javascript</a>
			</li>
			<li>
				<a href="#">Ruby</a>
			</li>
			<li>
				<a href="#">React</a>
			</li>
      <li>
				<a href="#">Python</a>
			</li>
      <li>
				<a href="#">Node.js</a>
			</li>
      
     <li>
				<a href="login.php" class="btn-1" style="padding:15px;color:white;text-decoration:none">Login</a>
			</li>
      <li>
       
 <!--
				<a href="signup.php" class="btn-2" style="padding:15px;color:white;text-decoration:none">Signup</a>
			</li>
       -->
		</ul>
    
	</div>
<!--<nav>

<input type="checkbox" id="res-menu">

<label for="res-menu">
  <i class="fa fa-bars" id="sign-one"></i>
  <i class="fa fa-times"  id="sign-two"></i>

</label>
<img src="tutorial point logo.png" width="100px" height="100px">
<ul>
<li><a href="#">Home</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Protofolio</a></li>
<li><a href="#">Service</a></li>
<li><a href="#">Contact</a></li>




</ul>
</nav>
-->
<!--<header id="header" class="col-12 col-sm-12 col-md-12">
 
<div class="col-12 col-sm-2 col-md-2 col-lg-2">
  <a href="project5.php"><img src="tutorial point logo.png"  id="logo"></a>
</div>
 <ul>
   <li><a href="https://getbootstrap.com/docs/5.1/getting-started/introduction/"><span>Bootstrap</span></a></li>
   <li><a href="https://www.javascript.com/learn/strings"><span>Javascript</span></a></li>
   <li><a href="https://api.jquery.com/"><span>Jquery</span></a></li>
   <li><a href="https://www.w3.org/Style/CSS/"><span>css</span></a></li>
   <li><a href="https://nodejs.org/en/"><span>Node.js</span></a></li>
   <li><a href="https://www.python.org/"><span>python<span<</a></li>
   <li><a href="https://www.php.net/docs.php"><span>PHP<span></a></li>
   <li><a href="https://reactjs.org/tutorial/tutorial.html"><span>React<span></a></li>
   <li><a href="https://angular.io/"><span>framework</span></a></li>

<div class="btn-1">
<a href="login.php">
<button class="btn btn-primary rounded-0 border-0">Login</button></a>
</div>
<div class="btn-2">
<a href="signup.php">
<button  class="btn btn-primary rounded-0 border-0"  >Signup</button></a>
</div>

 </ul>
 <div class="toggle" onclick="toggle()"></div>

</header>
-->
<script src="project.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
</body>

</html>