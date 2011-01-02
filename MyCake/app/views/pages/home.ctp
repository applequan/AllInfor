<?php
if (Configure::read() > 0):
	Debugger::checkSessionKey();
endif;
?>

<div >
<div >
<h3>百讯汇：</h3><br/>
<p>
东校区学生团体达91个,社团与学生密切相关；<br/>
我们突破困传统的：
<ul style="margin-left:130px">
	<li>公布栏有限；</li>
	<li>人工收集核实报名表；</li>
	<li>社团信息分散；</li>
	<li>信息反馈不及时等困难.</li>
</ul>
<br/>
竭诚为你提供优质的一站式服务！
<br/>
</p>
</div >
<div >
<p>
<img src="/MyCake/itemimages/begin.jpg" style="float:right;width:300px">
<ul style="margin-left:50px">
	<li> <h4>海报墙板块</h4>可以查看对应海报,即当前热门活动信息；</li>
	<li> <h4>社团板块</h4>可以进入对应社团主页；</li>
	<li> <h4>班级板块</h4>可以进入查看对应班务。</li>
</ul>


</p>
</div >

<form name=loading style="margin-top:50px">
　 <p align=center> <font color="#0066ff" size="2">接下来，我们将自动带你转入激情澎湃的《海报墙》，开始我们的“百讯汇”之旅</font><font color="#0066ff" size="2" face="Arial">...</font><br/>
　　<input type=text name=chart size=55 style="font-family:Arial; font-weight:bolder; color:#0066ff; background-color:#fef4d9; padding:0px; border-style:none;" />
　　<br/>
　　<input type=text name=percent size=10 style="color:#0066ff; text-align:center; border-width:medium; border-style:none;" />
　　<script>　
var bar=0　
var line="||"　
var amount="||"　
count()　
function count(){　
bar=bar+2　
amount =amount + line　
document.loading.chart.value=amount　
document.loading.percent.value=bar+"%"　
if (bar<99)　
{setTimeout("count()",500);}　
else　
{window.location = "http://localhost/MyCake/posters/index";}　
}</script>
　</p>
</form>
<p align="center"> 如果你迫不及待，也可以直接<a style="text-decoration: none" href="http://localhost/MyCake/posters/index"><font color="#FF0000">点击这里</font></a>.</p>
</div>