<?php session_start();
require('includes/config.php');
?>


<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<hr style="margin-left:260px;margin-right:260px;"></hr>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/1img100.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Online Payment</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/1img100.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Bkash</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/1img100.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="#">Nogod</a></div></br>
			<div style="border-radius:5px 5px 5px 5px; background:url(images/1img100.jpg);margin-left:160px;margin-right:160px;font-size:20px;"><a href="payment_cod.php">Cash On Delivery</a></div></br>