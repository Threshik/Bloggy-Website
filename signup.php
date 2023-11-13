<!DOCTYPE html>
<html>
<head>
	<title>SIGNUP</title>
	<link rel="stylesheet" type="text/css" href="stylel.css">
</head>
<body style="background: url('./assests/ba10.png');">
<nav class="navclass">
        <div class="nav-menu flex-row">
          <div class="brand">
            <a href="index.php" class="text">BLOGGY</a>
          </div>
          

      </nav>
      <form action="signup_check.php" method="post"> 
      <div class="card">
        <h2>SIGNUP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

         <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      class="box1"
                      value="<?php echo $_GET['name']; ?>"><br>
                      <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      class="box1"
                      placeholder="Name"><br>
          <?php }?>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" 
                      name="uname" 
                      placeholder="User Name"
                      class="box1"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      class="box1"
                      placeholder="User Name"><br>
          <?php }?>
          <input type="password" 
                 name="password" 
                 class="box1"
                 placeholder="Password"><br>
                 <input type="password" 
                 name="re_password" 
                 class="box1"
                 placeholder="Re_Password"><br>
       
     	
         <button type="submit" class="button">Signup</button>
         <div class="sign">
            <p>Existing User?<a href="index.php">Login</a></p>
        </div>
        </div>
      </form>

        

     	
        
        
        

     	
     
</body>
</html>