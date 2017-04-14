<?php
setcookie("name",$_POST["name"],time()+24*3600);
header("Location:test_a.html");
?>