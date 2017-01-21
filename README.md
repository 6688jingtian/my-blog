# my-blog
##个人博客(以下有详细部署方法)
##DEMO示例：</br>
###1.首页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/one.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/two.png)</br>
###2.博客页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/three.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/four.png)</br>
###3.日记页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/five.png)</br>
###4.相册页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/six.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/seven.png)</br>
###5.游戏页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/eight.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/nine.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/ten.png)</br>
###6.后台登录界面
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/eleven.png)</br>
###7.后台管理界面
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/twelve.png)</br>
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/thirteen.png)</br>
##简介：
<br>个人博客，前端用了html.css.js,后台为php，数据库为mysql,后台可自动上传文章，博客页加入了搜索栏（按题目搜索）。</br>
##部署方法：
<br>1.建议后台使用集成开发环境wampserver（强烈推荐），前端用Hbuilder（推荐）,数据库名为bbs,需要在MySQL数据库中建两个表，一个表是message（学生表），另一个表是users（用户表）;</br>
<br>(1)message表sql语句如下：</br>
<br>CREATE TABLE `message` (</br>
 <br>`id` tinyint(1) NOT NULL auto_increment,</br>
 <br>`kind` varchar(50) NOT NULL,</br>
 <br>`title` varchar(50) NOT NULL,</br>
 <br>`content` text NOT NULL,</br>
 <br>`lastdate` timestamp NOT NULL,</br>
 <br>PRIMARY KEY (`id`)</br>
<br>) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 </br>
<br>(2)users表有三个字段，分别为id（int）,name（varchar）,pwd（varchar）</br>
<br>2.建完表后需要向users表中添加管理员账号和密码</br>
<br>登录管理界面需要把show.php（博客页）变成/main.php，进入此目录进行后台管理，实现文章的增加（返回按钮），删除（删除键）。</br>
<br>3.有不会的多多百度。</br>
