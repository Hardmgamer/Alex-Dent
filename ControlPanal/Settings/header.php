<?php
// ابويا هياخد الكمبيوتر هو كمان :3 لو عرفت اكمل هكمل لما اعرف افتح هبعتلك واتس
// كمل بس شوف ملف headersize.php وهتفهم كل حاجه
include_once('./classes/DB.php');
session_start();
$data = DB::query('SELECT * FROM header');
if(isset($_SESSION['branches'])){
$branches = $_SESSION['branches'];
// echo sizeof($branches);
}
if(isset($_SESSION['headersize'])){
$branches = $_SESSION['headersize'];
// echo sizeof(headersize);
}
// session_destroy();
 ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

<div class="Heading">
	<div class="Textheading"><i class="fas fa-cog"></i><p>Edit header</p></div>
</div>
<div class="container-data">
   <div class="inputs">
     <div id="headeresult"><b></b></div>
    </div>
   </div>
 </div>
 <div class="headsizediv">
 <span class="spans">Header buttons</span>
 <select onchange="Selectheadersize()" name="headersize">
   <?php
     $availablebtt = array("0","1","2","3","4","5","6");
     foreach ($availablebtt as $availablebttt) {
       echo "<option>".$availablebttt."</option>";
     }  ?>
   </div>
</div>
<script>
function Selectbranch(){
      var branche1 = document.getElementsByName('branch')['0'].value;
      if (window.XMLHttpRequest) {
          // code for IE7+, Firefox, Chrome, Opera, Safari
          xmlhttp = new XMLHttpRequest();
      } else {
          // code for IE6, IE5
          xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("BrancheResult").innerHTML = this.responseText;
          }
        };
      xmlhttp.open("GET","./functions/brancheselect.php?branch="+branche1,true);
      xmlhttp.send();
  }
function Selectheadersize(){
        var hsize = document.getElementsByName('headersize')['0'].value;
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("headeresult").innerHTML = this.responseText;
            }
          };
        xmlhttp.open("GET","./functions/headersize.php?headersize="+hsize,true);
        xmlhttp.send();
    }

</script>
