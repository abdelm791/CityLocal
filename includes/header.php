<!DOCTYPE html>
<html>
	<head>
		<title>Website Visitor Counter</title>
		<style>
      body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      background-color: #1235 ;
    }
    
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    
    
    
    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        display: block;
      }
    }
    
    @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
      }
    }
    #myTopnav{
    transition-property: background-color;
    
    }
	#myTopnav1{
    transition-property: background-color;
    
    }
	#myTopnav2{
    transition-property: background-color;
    
    }
	#myTopnav3{
    transition-property: background-color;
    
    }
	#myTopnav4{
    transition-property: background-color;
    transition-duration:3s
	
    }
	#findeme{
    transition-property: background-color;
    transition: 3s;
    }

    </style>

	</head>
	
	<body>
		<header>
			<div class="topnav" >
				<?php echo'<a id="myTopnav" href="home.php">Home</a>
				<a id="myTopnav1" href="page_1.php">Casablanca</a>
				<a id="myTopnav2" href="page_2.php">Fés</a>
				<a id="myTopnav3" href="page_3.php">Rabat</a>
				<a id="myTopnav4" href="index.php">Total views</a>' ?>
			</div>
			<div>
       <Script>
  myTopnav.onclick = function() {
    this.style.backgroundColor = 'green';
  };
  myTopnav1.onclick = function() {
    this.style.backgroundColor = 'green';
  };
  myTopnav2.onclick = function() {
    this.style.backgroundColor = 'green';
  };
  myTopnav3.onclick = function() {
    this.style.backgroundColor = 'green';
  };
  myTopnav4.onclick = function() {
    this.style.backgroundColor = 'green';
  };
    </Script>
</div>

		</header>