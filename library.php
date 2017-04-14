<?php
require_once("../../mysqli_connect.php");
$u=mysqli_query($dbc,"SET NAMES UTF8");
$result = mysqli_query($dbc,"SELECT * FROM testData");
while($row = mysqli_fetch_array($result))
  {
    echo $row['name'] . " ";
    echo $row['atime'] . " " . $row['ascore'] . " ";
    echo $row['btime'] . " " . $row['bscore'] . " ";
    echo $row['ctime'] . " " . $row['cscore'] . " ";
    echo $row['dtime'] . " " . $row['dscore'] . " ";
    echo $row['time'];

    echo "<br />";
  }

?>
