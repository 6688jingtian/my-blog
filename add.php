<?php
include("conn.php");
if (isset($_POST['submit']))
{
    $sql="insert into message(id,kind,title,content,lastdate) ".
    "values ('','$_POST[kind]','$_POST[title]','$_POST[content]',now())";
    mysql_query($sql);
    echo "<script>alert('添加成功');history.go(-1)</script>";
}
?>