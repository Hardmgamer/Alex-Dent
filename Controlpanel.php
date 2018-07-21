<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="./Stylesheets/ControlPanel.css">
<link rel="stylesheet" href="./Stylesheets/icons.css">
<title>Control Panel</title>
<script src="./js/sidebar.js"></script>
<script src="./js/sidescroll.js"></script>
</head>
<body onscroll="scroll()">
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
	<!-- <?php include('./ControlPanal/generalinfo.php'); ?> -->
	<?php include('./ControlPanal/members.php'); ?>
</div>

</body>
