<!doctype html>
<html>
<head>

<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
<link href="css/Icomoon/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<script type="text/javascript" src="js/jquery-2.0.2.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/modernizr.custom.js"></script>


<style>

html{ height:100%; 
      width:100%; }

body { background-color: #2ecc71;}

h1 { color: #555;
     font-size: 4.875em;
     font-family: verdana;
     text-align: center;   }

#cccontainer{ position: absolute;
              top: 48%;
              margin-top: -10px;
              left: 0;
              width: 100%; }

#credit{ position: absolute;
         bottom: -18px; left: 0;
         font-family: arial;
         color: #bdc3c7;
         font-size: 0.65em;  }

.main > div { font-size: 19px;
              font-family: 'Ubuntu', sans-serif;
              color: #494949;   
              margin: 0;     } 

body { background:rgb(30,30,40);  }
form { max-width:420px; margin:50px auto; }

</style>
</head>

<body>

<! Menu---------------------------------------------------->
<ul id="gn-menu" class="gn-menu-main">
<li class="gn-trigger">
<a class="gn-icon gn-icon-menu"><span>Menu</span></a>
<nav class="gn-menu-wrapper">
<div class="gn-scroller">
<ul class="gn-menu">
<li class="gn-search-item"> <center></center> </li>
<li><a href="index.html"><center>Home</center></a></li>
<li><a href="about.html"><center>About</center></a></li>
<li><a href="projects.html"><center>Projects</center></a></li>
<li><a href="contact.html"><center>Contact</center></a></li>
</ul></div></nav></li>    
<li><a href="http://www.marcoherremans.nl">YOUR NAME</a></li></ul></div>

<script src="js/classie.js"></script>
<script src="js/gnmenu.js"></script>
<script> new gnMenu( document.getElementById( 'gn-menu' ) ); </script>
<! --------------------------------------------------------------->

<div id="cccontainer">

<?php
  $to = "ENTER YOUR EMAIL HERE";
  $subject = "Contact form Website";
$name = $_POST["name"];
$email = $_POST["email"];
$comment = $_POST["comment"];
  $txt = "$name -- $email -- $comment";
  


  //send email
  if (!mail($to,$subject,$txt)){
}
  echo"<center> Verstuurd </center>";
?>



</div>
  
</body>
</html>