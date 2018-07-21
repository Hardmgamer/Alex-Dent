<div class="heading">
  <div class="Textheading"><i class="fas fa-cog"></i><p>Settings > General Information</p></div>
</div>
<div class="generalinfo">
  <form action="#" method="get">
    <div class="generalinfo-cont">
    <label class="texts" for="info">Information</label><br>
    <textarea name="info" placeholder="Info here..."></textarea><br>
    <label class="texts" for="aboutus">About us</label><br>
    <textarea name="aboutus" placeholder="About-us here..."></textarea><br>
  </div>
  <div class="opening-times">
    <?php
    $Openingtimes=array("7:00 AM", "7:30AM", "8:00 AM","8:30 AM","9:00 AM","9:30 AM", "10:00 AM", "10:30 AM", "11:00 AM","11:30 AM","12:00 PM","Closed");
    $Closingtimes=array("7:00 PM", "7:30PM", "8:00 PM","8:30 PM","9:00 PM","9:30 PM", "10:00 PM", "10:30 PM", "11:00 PM","11:30 PM","12:00 AM","Closed");
    $Days=array("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
    $OT = null;
    $CT = null;
    foreach($Openingtimes as $OpeningTime){
      $OT .= "<option value='".$OpeningTime."'>".$OpeningTime."</option>";
    }
    foreach($Closingtimes as $ClosingTime){
      $CT .= "<option value='".$ClosingTime."'>".$ClosingTime."</option>";
    }
    ?>
    <div class="Address1">
      <h3>Kasr El Einy</h3>
    <ul class="Opening1">

      <?php
      foreach($Days as $Day){
        echo "<li>".$Day."<select name='carlist' form='carform' class='times'>".$OT.
        "</select> to <select name='carlist' form='carform' class='times'>".$CT." </select></li>";
      }?>

    </ul>
  </div>
  <div class="Address1" style="padding-left:20px; border-left:1px solid #9f9f9f;">
    <h3>Nasr City</h3>
  <ul class="Opening1">

    <?php
    foreach($Days as $Day){
      echo "<li>".$Day."<select name='carlist' form='carform' class='times'>".$OT.
      "</select> to <select name='carlist' form='carform' class='times'>".$CT." </select></li>";
    }?>

  </ul>
</div>
<div class="butt-cont">
  <input type="submit" value="Save" name="submit" class="form-butt">
  <input type="submit" value="Preview" name="submit" class="form-butt">
</div>
</div>
</form>
