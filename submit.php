<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Testing!</title>
</head>
<body>
<?php
$NAME=$_COOKIE['name'];
$ATIME=$_COOKIE['Atime'];
$ASCORE=$_COOKIE['Ascore'];
$BTIME=$_COOKIE['Btime'];
$BSCORE=$_COOKIE['Bscore'];
$CTIME=$_COOKIE['Ctime'];
$CSCORE=$_COOKIE['Cscore'];
$DTIME=$_COOKIE['Dtime'];
$DSCORE=$_COOKIE['Dscore'];
echo "$NAME<br/>";
echo "Time_a:$ATIME Score_a:$ASCORE<br/>";
echo "Time_b:$BTIME Score_b:$BSCORE<br/>";
echo "Time_c:$CTIME Score_c:$CSCORE<br/>";
echo "Time_d:$DTIME Score_d:$DSCORE<br/>";
require_once("../../mysqli_connect.php");
$q="INSERT INTO testData (name,atime,ascore,btime,bscore,ctime,cscore,dtime,dscore,time) 
VALUES ('$NAME','$ATIME','$ASCORE','$BTIME','$BSCORE','$CTIME','$CSCORE','$DTIME','$DSCORE',NOW())";
$u=mysqli_query($dbc,"SET NAMES UTF8");
$r=@mysqli_query($dbc,$q);
if($r){
    echo '<h1>Thank you!</h1>';
}else{
    echo '<h1>System Error!</h1>'.mysqli_error($dbc);
}
?>
<p>
    先献上一个大写的父亲！<br/>
    Mua！（划掉）<br/>
    你有一万次机会关掉这个无聊的实验去打dota/打lol/看韩剧/吃零食/玩手机，然而你为了当我的父亲走到了这一步，不容易不容易【拍肩<br/>
    <br/><br/>
    最后<br/>
    可以骂这个无聊实验的设计者：北京航空航天大学人文社会科学学院心理专业2013级本科生陈方荣<br/>
    再次感谢新手程序猿：哲学家、音乐家、物理学家、神秘学家、脑认知科学家、美食家北京航空航天大学空间与环境学院2014级本科生张浩为
</p></body></html>