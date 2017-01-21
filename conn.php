<?php
$conn=mysql_connect("localhost","root") or die("数据库链接错误");
mysql_select_db("bbs",$conn);
mysql_query("set names 'utf8'"); //使用utf-8中文编码;
?>