<?php include'connect.php';?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> Henl Nepal Network | E-Library PROJECT | One E-LIBRARY PER DISTRICT </title>
		<link type="text/css" rel="stylesheet" href="style/style.css"></link>
		<link rel="shortcut icon" style="border-color:red;" href="images/logo.png"  type="image/x-icon">
	</head>
	<body>
		<div class='wrapper'>
				<?php include'menubar.php';?>

			<div id="marquee">
				<marquee direction="left" style="background-color:transparent; text-decoration:underline;"><?php include'marquee.php' ?></marquee>
			</div>

			<div class="left">
						TEST LEFT DIVISION
			</div>
			
			<div class="right">
<table  style="height:70%;	background-image:url(images/bg.png); repeat-x; "width="800"  align="center" border="0" cellpadding="0" cellspacing="0">
				<td width="23" rowspan="2">&nbsp;</td>
				<td width="570" align="left" valign="top"><!-- Content -->
				
						<?php

							$connect=mysql_connect("localhost","root","root") or die("Couldn't connect!!");
							mysql_select_db("henn") or die("Couldnot connect to the database");
							$query=mysql_query("SELECT * FROM feedback");
							echo"<div style='max-height:auto; overflow:auto;'>";	
								echo"<h1 style='margin-left:200px;color:red;'>USER FEEDBACKS</h1>";
						while($row=mysql_fetch_array($query))
						{

								echo"<div style='padding:10px; width:auto;padding-right:0px; '>";
								$name=$row['from'];
								$subject=$row['subject'];
								$feedback=$row['feedback'];

								echo"<hr color='#DDD9E7'>";
								echo"&nbsp&nbspFrom:".$name."<br>";
								echo"&nbsp&nbspSubject:".$subject."<br>";
								echo"&nbsp&nbspFeedback:  ".$feedback."<br>";
								echo"<hr color='red'>";
								echo"</div>";
						}
						echo"</div>";
				?>
	</td>
		</table>

			</div>

		</div>
	</body>
</html>


