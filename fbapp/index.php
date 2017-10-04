<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Home</title>
</head>
<body>
<SCRIPT type="text/javascript" src="./fbapp/fb.js"> </SCRIPT>
 <div id="content" style="width:70%; float:Left;">
    <h2> WELCOME <?php if (isset($_SESSION['name'])) {echo $_SESSION['name'];}?> </h2>
 </div>
<div id= "sidebar" style="width:20%; float:right">
	
<div class="fb-login-button" data-scope="public_profile,email" ></div>
</div>
</body>
</html> 