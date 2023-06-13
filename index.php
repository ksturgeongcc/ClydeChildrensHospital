<?php
	include 'components/header.php';
?>
<main class="home">
		<?php include 'components/navigation.php'; ?>

	<div class="typewriter">
		<div class="css-typing">
		  <h1>
			Welcome to Clyde Childrens Hospital portal.
		  </h1>
		  <h1>
			You can login or register using the links
		  </h1>
		  <h1>
			above, or choose from the following options.
		  </h1>
		</div>
	<div class="link-container">
		<div onclick="location.href='directions.php'"><p>Directions</p></div>
		<div onclick="location.href='about.php'"><p>Hospital Information</p></div>
		<div onclick="location.href='login'"><p>Login</p></div>
	</div>
	</div>
</main>

