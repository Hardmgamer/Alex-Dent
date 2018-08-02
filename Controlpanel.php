<?php
include_once('./classes/DB.php');

if(isset($_GET['page'])){
	$p = $_GET['page'];
}else{
	$p = 'dashboard';
}
?>
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="./Stylesheets/ControlPanel.css">
<link rel="stylesheet" href="./Stylesheets/icons.css">
<link rel="stylesheet" href="./Stylesheets/insights.css">
<link rel="stylesheet" href="./Stylesheets/MembersSec.css">
<link rel="stylesheet" href="./Stylesheets/headeredit.css">
<script src="./js/imagezoom.js"></script>
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
	<a href="?page=dashboard"><div><i class="fas fa-home"></i><p>Dashboard</p></div></a>
	<a href="?page=settings"><div><i class="fas fa-cog"></i><p>Settings</p></div></a>
	<a href="#"><div><i class="fab fa-telegram-plane"></i><p class="new-not">Inqueries</p></div></a>
	<a href="?page=insights"><div><i class="fas fa-chart-line"></i><p>Insights</p></div></a>
</div>
</div>
<div id="body" class="body-large">
<?php	if($p == 'settings'){
include('./ControlPanal/controlpanaldashboard.php'); }
else if($p == 'settingsg'){
include('./ControlPanal/Settings/generalinfo.php');
}
else if($p == 'members'){
include('./ControlPanal/members.php');
}else if($p == 'insights'){
include('./ControlPanal/Insights.php');
}
else if($p == 'products'){
	include('./ControlPanal/Products/products.php');
}
else if($p == 'header'){
	include('./ControlPanal/Settings/header.php');
}
 ?>
</div>

</body>
