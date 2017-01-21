<!DOCTYPE html>
<html lang="utf-8">
<head>
        <link href="css/css.css" rel="stylesheet" type="text/css">
</head>
<table width=730 border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#add3ef">
<?php
      include("conn.php");
//===============搜索================
	   //用来存放搜索条件
	  $wherelist=array();
	  //判断姓名是否需要搜索(模糊查询)
	  if(!empty($_GET['title']))
	  {
		  $wherelist[]="title like '%{$_GET['title']}%'";
	  }
	  //判断姓名是否要进行搜索
	  if(count($wherelist)>0){
		  //拼装搜索条件
		  //implode代表把$wherelist条件用and拆分成字符串
		  //where前后有空格
		  $where=' where '.implode("and ",$wherelist);
	  }else
	  {
		  $where="";
	  }
//===============搜索================

//==============分页=================
	  //定义变量
	  $page=isset($_GET['p'])?$_GET['p']:1; //当前页数（isset检测变量是否设置）
	  $maxRows=0;    //总数据条数
	  $pageRows=3;   //每页数据条数
	  $maxPages=0;   //最大页数
      //获取总条数(查询student一共有几条数据)
      //A as B 给A起一个别名B
      $sql="select count(*) as num from message";
      $result=mysql_query($sql);
      $row=mysql_fetch_assoc($result);//函数从结果集中取得一行作为关联数组
      $maxRows=$row['num'];
      //echo $maxRows;
      //计算总页数
      $maxPages=ceil($maxRows/$pageRows);//ceil 进一取整
      if($page>$maxPages)//当前页面大于最大页时就等于最大页
	  {
	     $page=$maxPages;
	  }		 
	  if($page<1)//当前页数小于1就等于1
	  {
	     $page=1;
	  }
	  //拼装limit语句（limit m,n 代表从第m+1个数据开始取，一共取n个）
	  //(1,2,3,4,5,6,7,8,9)
	  // 0       4       8
	  $limit=" limit ".(($page-1)*$pageRows).",".$pageRows;
//==============分页=================
?>
<form method="get" action="list.php">
<td width="40%" align="left" valign="middle">
<span>搜索：</span>
<input type="text" name="title">
<input name="" type="submit" value="查询" >	
</td>
</form>
<?php
 $sql="select * from message".$where.$limit;
 $query=mysql_query($sql);
 while($row=mysql_fetch_array($query)){  
?>
        <tr bgcolor="#eff3ff">
            <td><font name="title" color="blue">标题：</font><?php echo $row['title'];?> <font color="blue">类别：</font><?php echo $row['kind'];?><div align="right"><a href="del.php?id=<?php echo $row['id'];?>">删除</a></div></td>
        </tr>
        <tr bgColor="#ffffff">
            <td>发表内容:<?php echo "<pre>{$row['content']}</pre>"; ?></td>
        </tr>
        <tr bgColor="#ffffff">
            <td><div align="right">时间:<?php echo $row['lastdate'];?></td>
        </tr>
<?php } ?>
        <tr>
		<?php
		echo "<td align=\"left\" valign=\"top\" class=\"fenye\">{$maxRows} 条数据 {$page}/{$maxPages} 页&nbsp;&nbsp;";
		echo "<a href=\"list.php?p=1\" target=\"mainFrame\" onFocus=\"this.blur()\">首页</a>&nbsp;&nbsp;";
		echo "<a href=\"list.php?p=".($page-1)."\" target=\"mainFrame\" onFocus=\"this.blur()\">上一页</a>&nbsp;&nbsp;";
		echo "<a href=\"list.php?p=".($page+1)."\" target=\"mainFrame\" onFocus=\"this.blur()\">下一页</a>&nbsp;&nbsp;";
		echo "<a href=\"list.php?p={$maxPages}\" target=\"mainFrame\" onFocus=\"this.blur()\">尾页</a>";
		echo "</td>";
	    ?>
		</tr>
        <tr bgcolor="#f0fff0">
        <td><div align="right"><a href="main.php">返回</a></td>
        </tr>
</table>
</html>