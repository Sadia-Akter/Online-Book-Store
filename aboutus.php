<?php session_start();?>


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
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
<p>								
Hello ,we are novice developer from EWU 
and trying to create a website for book 
lovers who can easily find their required 
books searching here. Hope this will be 
useful for the users </p><br>
<p>
Hafanul Islam____Email ID:2016-3-60-004@std.ewubd.edu<br>
Sadia Akter_____Email ID: 2017-2-60-013@std.ewubd.edu<br>
Shahria Alam____Email ID:2017-2-60-054@std.ewubd.edu<br></p>


							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
