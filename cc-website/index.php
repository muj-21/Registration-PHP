<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<div class="header">
	<h2>Home Page</h2>
	
	<div class="welcomearea">
	<!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    	<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
	</div>

</div>
<div class="container" >
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
		Lorem ipsum dolor sit amet consectetur adipiscing elit eget, eu ante sodales hac feugiat ligula urna, diam metus erat vivamus ultricies pharetra aptent nam, viverra penatibus tempor malesuada luctus sem. Bibendum sapien nec tempor scelerisque rhoncus senectus inceptos turpis dictumst aliquet id, felis pretium vitae cubilia volutpat iaculis per interdum dui nascetur facilisi, condimentum montes et praesent facilisis mus eu platea venenatis euismod. Malesuada et mattis vivamus natoque montes cubilia, risus felis senectus gravida justo, faucibus orci vitae congue aptent.</br>

Risus imperdiet tristique laoreet natoque viverra sollicitudin sagittis, litora netus cursus praesent fames sem nec quam, faucibus lobortis at ullamcorper aliquet dapibus. Aliquam massa curae etiam tempus venenatis molestie viverra per condimentum lacus, cursus sem enim magnis non metus diam auctor cubilia felis, velit facilisi arcu dapibus pulvinar pellentesque primis tristique egestas. Feugiat et commodo quam fringilla suspendisse iaculis himenaeos eget est integer pulvinar mus, tristique platea nisl dis natoque habitasse cubilia nulla ac purus posuere.

    </div>
		
</body>
</html>