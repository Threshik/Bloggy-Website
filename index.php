<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="stylel.css">
</head>
<body style="background: url('./assests/ba10.png');">
<nav class="navclass">
        <div class="nav-menu flex-row">
          <div class="brand">
            <a href="index.php" class="text">BLOGGY</a>
          </div>
          

      </nav>

     <form action="login.php" method="post">
     	<div class="card1">
       <h2>ADMIN LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	
     	<input type="text" class = "box" name="uname" placeholder="User Name"><br>

    
     	<input type="password" class = "box" name="password" placeholder="Password"><br>

     	<button type="submit" class="button">Login</button>
         <div class="sign">
            <p>New User?<a href="signup.php">Sign-Up</a></p>
        </div>
      </div>
     </form>
</body>
</html>