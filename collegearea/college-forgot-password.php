<?php 
	  @$error=$_REQUEST[error];
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Admin Forgot Password </title>
  <link rel="stylesheet" href="css/admin-style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>
  <section class="container">
    <div class="login">
      <h1>Forgot Password College Area</h1>
      <form method="post" action="check-college-forgot-password.php">
      <?php
	  if ($error==202)
	  {
      	echo "<p><label style='color:#C00; font-size:16px'>&nbsp;&nbsp;&nbsp;Invalid Credentials</label></p>";
	  }
	  ?>
        <p><input type="text" name="login_id" value="" placeholder="Username or Email" required></p>
        <p><input type="text" name="confirm_login_id" value="" placeholder="Retype Email" required></p>
        <p class="remember_me">
          <label>
            <input type="checkbox" name="remember_me" id="remember_me">
            Remember me on this computer
          </label>
        </p>
        <p class="submit"><input type="submit" name="commit" value="Generate Password"></p>
      </form>
    </div>

    <div class="login-help">
      <p>Forgot your password? <a href="college-forgot-pasword.php">Click here to reset it</a>.</p>
    </div>
  </section>

  <section class="about">
    <p class="about-links">
      <a href="http://www.ecounselling.tk/" target="_parent">View Main Site</a>
      <a href="" target="_parent">Hosting Area</a>
    </p>
    <p class="about-author">
      &copy; 2013&ndash;2014 <a href="http://www.ecounselling.tk." target="_blank">E Counselling</a> -
      <a href="#" target="_blank">Major Project</a><br>
      Devoloped By<a href="#" target="_blank">Team Suman-subhra-Arnab-Nilotpol </a>
  </section>
</body>
</html>
