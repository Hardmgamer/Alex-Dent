<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="./Stylesheets/ControlPanel.css">
<link rel="stylesheet" href="./Stylesheets/icons.css">
<title>Control Panel</title>

</head>
<body>
<div class="header">
<div class="title">Admin Panel - Dashboard</div>
</div>
<div id="side" class="side-small">
<div class="prof">
	<div onclick="menu()" id="menu-icon">
		<div class="menu-icon"></div>
	</div>
	<div class="prof-username"><div class="username-cont"><p>Dr. Hesham El-Sheikh</p></div></div>
	<div class="prof-pic prof-pic-small" id="prof-pic"><div class="pic-cont"></div></div>
</div>
<div class="menu">
	<div><i class="fas fa-home"></i><p>Dashboard</p></div>
	<div><i class="fas fa-cog"></i><p>Settings</p></div>
	<div><i class="fab fa-telegram-plane"></i><p class="new-not">Inqueries</p></div>
	<div><i class="fas fa-chart-line"></i><p>Insights</p></div>

</div>
</div>
<div id="body" class="body-large">
	<!-- <?php include('./ControlPanal/controlpanaldashboard.php'); ?> -->
	<div class="Settings">
		<div class="Settingtext generalinformationtext"><i class="fas fa-cog"></i><p>Settings > General Information</p></div>
	</div>
	<div class="generalinfo">
		<form action="#" method="get">
			<div class="generalinfo-cont">
			<label class="texts" for="info">Information</label><br>
			<textarea name="info" rows="2" cols="2" placeholder="Here is informations"></textarea><br>
			<label class="texts" for="aboutus">About us</label><br>
	    <textarea name="aboutus" rows="2" cols="2" placeholder="Here is about us"></textarea><br>
		</div>
		<div class="opening-times">
			<div class="Address1">
				<h3>Kasr El Einy</h3>
			<ul class="Opening1">
				<?php
				$Openingtimes=array("Closed","7:00 AM", "7:30AM", "8:00 AM","8:30 AM","9:00 AM","9:30 AM", "10:00 AM", "10:30 AM", "11:00 AM","11:30 AM","12:00 PM");
				$Closingtimes=array("Closed","7:00 PM", "7:30PM", "8:00 PM","8:30 PM","9:00 PM","9:30 PM", "10:00 PM", "10:30 PM", "11:00 PM","11:30 PM","12:00 AM");
				$Days=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
				?>
				<?php foreach($Days as $Day){
					echo"<li>".$Day."<select name='carlist' form='carform' class='times'>".foreach($Openingtimes as $OpeningTime){ echo "<option value='".$OpeningTime."'>".$OpeningTime."</option>"; }
					."</select> to <select name='carlist' form='carform' class='times'>".
					foreach($Closingtimes as $ClosingTime){
						echo "<option value='".$ClosingTime."'>".$ClosingTime."</option>";
					}
						." </select>
</li>"
				}?>

			</ul>
		</div>
		<input type="submit" value="Save" name="submit" class="savebuttn">
		<input type="submit" value="Preview" name="submit" class="Previewbuttn">
		</form>
	</div>
</div>
<script>
var i = 0;
function menu(){
	var x = document.getElementById('menu-icon');
	var side = document.getElementById('side');
	var profpic = document.getElementById('prof-pic');
	var body = document.getElementById('body');
	if(i == 0){
		x.classList.add("menu-icona");
		body.classList.remove("body-large");
		side.classList.remove("side-small");
		profpic.classList.remove("prof-pic-small");
		i = 1;
	}else{
		x.classList.remove("menu-icona");
		body.classList.add("body-large");
		side.classList.add("side-small");
		profpic.classList.add("prof-pic-small");

		i = 0;
	}
}
</script>
</body>
