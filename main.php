<?php
//开启session
session_start();
//判断session是否为空
if(empty($_SESSION['adminuser'])){
	header("Location:login.php");
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="css/css.css" rel="stylesheet" type="text/css">
    <title>留言板</title>
    <?php include ("add.php")?>
</head>
<script>
    function CheckPost() 
	{
        if(myform.user.value=="")
        {
            alert("请填写用户");
            myform.user.focus();
            return false;
        }
        if (myform.title.value.length<5)
        {
            alert("标题不能少于5个字符");
            myform.title.focus();
            return false;
        }
        if (myform.content.value=="")
        {
            alert("内容不能为空");
            myform.content.focus();
            return false;
        }
    }
</script>
<body>
<b><a href="list.php">浏览</a></b>
<b><a href="useraction.php?a=logout" target="topFrame" onFocus="this.blur()" class="admin-out">注销</a></b>
<hr size=1>
<form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
    类别：<input type="text" name="kind"/><br>
    标题：<input type="text" name="title" /><br>
    内容：<textarea name="content" cols=90 rows=20 contenteditable="true"  wrap="physical"></textarea><br>
    <input type="submit" name="submit" value="提交" onclick="insert()"/>
</form>
</body>
</html>