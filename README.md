# my-blog
##个人博客(以下有详细部署方法)
##DEMO示例：</br>
###1.首页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/one.png)</br>
###2.博客页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/two.png)</br>
###3.日记页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/three.png)</br>
###4.游戏页
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/four.png)</br>
###5.后台登录界面
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/five.png)</br>
###6.后台管理界面
<br>![](https://github.com/6688jingtian/my-blog/raw/master/img/six.png)</br>
##简介：
<br>个人博客，前端用了html.css.js,后台为php，数据库为mysql,后台可自动上传文章。</br>
##部署方法：
<br>建议后台使用集成开发环境wampserver，前端用Hbuilder,需要在MySQL中建两个表，一个表是message（学生表），另一个表是users（用户表）;</br>
<br>message表sql语句如下：</br>
CREATE TABLE `message` (
 `id` tinyint(1) NOT NULL auto_increment,
 `kind` varchar(50) NOT NULL,
 `title` varchar(50) NOT NULL,
 `content` text NOT NULL,
 `lastdate` timestamp NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 
