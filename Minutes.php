<?php
	include_once ('_layout-top.php');
?>

	<div style="padding: 40px 80px 40px 80px; " class="center">

		<p align="center" style="padding:30px"><img src="assets/minutes_banner.png" alt="" width="60%"/></p>
				
		<p class="style4">
			<center><u><strong>
				<?php
					$month = date("M");
					switch($month){
						case "Jan":
							echo "Spring ";
							break;
						case "Feb":
							echo "Spring ";
							break;
						case "Mar":
							echo "Spring ";
							break;
						case "Apr":
							echo "Spring ";
							break;
						case "May":
							echo "Spring ";
							break;
						case "Jun":
							echo "Spring ";
							break;
						case "Jul":
							echo "Fall ";
							break;
						case "Aug":
							echo "Fall ";
							break;
						case "Sep":
							echo "Fall ";
							break;
						case "Oct":
							echo "Fall ";
							break;
						case "Nov":
							echo "Fall ";
							break;
						case "Dec":
							echo "Fall ";
							break;
						default:
							echo "Fall ";
					} 
					echo date("Y");
				?>
			</strong></u></center>
		</p>
		
		<center>
		
		<p>
			Meeting minutes are sent out every week via e-mail following the meeting.
		</p>
		
		<p>
			Subscribe today to begin receiving meeting minutes and updates!
		</p>

		<a href="http://eepurl.com/ROsNT">SEDS UCF meeting minutes e-mail Sign-Up</a>
		<p>
		 
		</center> 
	</div>
		
<?php
	include_once ('_layout-bottom.php');
?>