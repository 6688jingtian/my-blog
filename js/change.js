window.onload=slide();
var img=new Array(6);//创建数组,new可省略
var nums=0;
if(document.images)//可以引用一个image对象，即对于声明的src，然后images[0];
{
   for(i=1;i<=6;i++)//实例化对象，方可引用
   {
	img[i]=new Image();//创建对象实例
	img[i].src="img/"+i+".jpg"//设置所有图片的路径及名称，就是字符串加字符串
   }
}
function fort()//定义图片切换函数
{
	nums++;
	document.images[0].src=img[nums].src;
	if(nums==6)
	nums=0;
}
function slide()//每隔一秒连续不断的调用fort()函数
{
	setInterval("fort()",3000);//单位为毫秒，1秒，定时调用函数
}	