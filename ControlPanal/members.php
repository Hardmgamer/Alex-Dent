<div class="heading">
	<div class="Textheading Members "><i class="fas fa-users"></i><p>Members</p></div>
</div>
<?php
$Administrators = array("Dr.Hisham","Administrator2");
$Moderators = array("Moderator1","Moderator2","Moderator3","Moderator4");
$colors = array("red","cyan","blue","yellow");
$circles = null;
foreach ($colors as $color) {
	$circles="<div class=\"circle\" style=\"background-color:$color\"></div>";
}
 ?>

<div class="catagory">
	<div class="catagory-name">
   	<p>Administrators</p>
	</div>
	<div class="catagory-members">
		<ul>
      <?php
			foreach ($Administrators as $Administrator) {
				echo  "$circles <li>$Administrator</li>";
			}
			?>
		</ul>
	</div>
	<div class="catagory-name">
		<p>Moderators</p>
	</div>
	<div class="catagory-members">
		<ul>
			<?php
			foreach ($Moderators as $Modeator) {
				echo "$circles <li>$Modeator</li>";
			}
			?>
		</ul>
	</div>
