<?php $date = date('Y-m-00');

$dd = DB::query('SELECT * FROM userpmonth WHERE month = :d', array(':d'=>$date));
if(empty($dd)){
  DB::query('INSERT INTO userpmonth VALUES(:count, STR_TO_DATE(:month, "%Y-%m-00"))', array(':count'=>0,':month'=>$date));
}
$cc = DB::query('SELECT count FROM userpmonth WHERE month = :d', array(':d'=>$date));
$cc = $cc[0]['count'];
$cc++;
DB::query('UPDATE userpmonth SET count = :count WHERE month = :month', array(':count'=>$cc, ':month'=>$date));
?>
