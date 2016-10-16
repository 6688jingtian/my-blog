function showpic(whichpic)
{
	if(!document.getElementById("placeholder"))return false;
	var source=whichpic.getAttribute("href");
	var place=document.getElementById("placeholder");
	if(place.nodeName!="IMG")return false;
	place.setAttribute("src",source);//后面的值赋给前面
	if(document.getElementById("description"))////锦上添花而已
	{
	var text=whichpic.getAttribute("title")?whichpic.getAttribute("title"):" ";/*三目运算符*/
	var descript=document.getElementById("description");
	if(descript.firstChild.nodeType==3)
	  {
	   descript.firstChild.nodeValue=text;
	  }
	return true;
	}
}
function prepargallery()//分离javascript 
{
	if(!document.getElementsByTagName)return false;
	if(!document.getElementById)return false;
	if(!document.getElementById("imagegallery"))return false;
	var gallery=document.getElementById("imagegallery");
	var links=gallery.getElementsByTagName("a");
	for (var i=0;i<links.length;i++) 
	{
		links[i].onclick=function(){return !showpic(this);}
		//links[i].onkeypress=links[i].onclick;残疾人可用用tab和enter产生问题过多
	}
}
function addloadevent(func)//万能函数，解决数量特别多的时候window.onload;
{
	var oldonload=window.onload;
	if(typeof window.onload!='function')
	{
		window.onload=func;
	}else
	{
		window.onload=function(){oldonload();func();}
	}
}
function prepareplaceholder()
{
if(!document.createElement)return false;
if(!document.createTextNode)return false;
if(!document.getElementById)return false;
if(!document.getElementById("imagegallery"))return false;
var placeho=document.createElement("img");
placeho.setAttribute("id","placeholder");
placeho.setAttribute("src","img/onebig.jpg");
var descript=document.createElement("p");
descript.setAttribute("id","description");
var desctext=document.createTextNode("我叫于贵川，现就读于沈阳工业大学计算机专业，大一时一直在玩，没学习。");
descript.appendChild(desctext);
var gallery=document.getElementById("imagegallery");
insertafter(placeho,gallery);
insertafter(descript,placeho);
}
function insertafter(newelement,targetelement)
{
	var parent=targetelement.parentNode;
    if (parent.lastChild==targetelement)
    {
    	parent.appendChild(newelement);
    }
    else
    {
    	parent.insertBefore(newelement,targetelement.nextsibling);
    }
}
addloadevent(prepareplaceholder);
addloadevent(prepargallery);