<div class="heading">
	<div class="Textheading Members "><i class="fas fa-users"></i><p>Members</p></div>
</div>
<?php
$Administrators = array("Dr.Hisham","Administrator2");
$Moderators = array("Moderator1","Moderator2","Moderator3","Moderator4");
 ?>

<div class="catagory">
	<div class="catagory-name">
   	<p>Administrators</p>
	</div>
	<div class="catagory-members">
		<ul>
      <?php
			foreach ($Administrators as $Administrator) {
				echo  "<li>$Administrator</li>";
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
				echo "<li>$Modeator</li>";
			}
			?>
		</ul>
	</div>
