<div class="posters index">
<h2><?php __('Posters');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('theme');?></th>
	<th><?php echo $paginator->sort('pubDate');?></th>
	<th><?php echo $paginator->sort('discription');?></th>
	<th><?php echo $paginator->sort('imageName');?></th>
	<th><?php echo $paginator->sort('userleague_id');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($posters as $poster):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $poster['Poster']['id']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['theme']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['pubDate']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['discription']; ?>
		</td>
		<td>
			<?php echo $poster['Poster']['imageName']; ?>
		</td>
		<td>
			<?php echo $html->link($poster['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $poster['Userleague']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $poster['Poster']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $poster['Poster']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $poster['Poster']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $poster['Poster']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>

<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

<div >
<?php
foreach ($posters as $poster):
$imgpath=ImaDir."/itemimages/".$poster['Poster']['imageName'];?>
<img src="<?=$imgpath?>" width="200" height="200" border="0"/>
<?php echo $html->link($poster['Userleague']['id'], array('controller' => 'userleagues', 'action' => 'view', $poster['Userleague']['id'])); ?>
<?php endforeach; ?>
</div>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Poster', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Userleagues', true), array('controller' => 'userleagues', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Userleague', true), array('controller' => 'userleagues', 'action' => 'add')); ?> </li>
	</ul>
</div>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="twoColFixRtHdr.css" rel="stylesheet" type="text/css" />
<link href=".css" rel="stylesheet" type="text/css" />
<style type="text/css">
.container .content div table {
	font-family: "微软雅黑";
}
</style>
<script src="SpryAssets/SpryTabbedPanels.js" type="text/javascript"></script>
<link href="SpryAssets/SpryTabbedPanels.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
  <div class="header">
	<div align="right"><a href="http://localhost/MyCake/users/login">login in</a>|<a href="http://localhost/MyCake/users/add">register</a></div>
	<div style="width:100%; height:100px">
	<div style="float:left; width:200; height:100;">
		<img name="" src="" width="200" height="100" alt="" />
	</div>
	<div id="menu" style="float:left; margin-top:70px;">
    <ul class="broad">
	<li>
	  <div align="center"><a href="#">海报墙</a></div>
	</li>
	<li>
	  <div align="center"><a href="#">社团版</a></div>
	</li>
	<li>
	  <div align="center"><a href="#">班务版</a></div>
	</li>
    </ul>
	</div>
	</div>
  <!-- end .header --></div>
  <div class="sidebar1">
    <ul class="nav">
<div align="center">Top of today </div>
	<li><a href="#">链接一</a></li>
	<li><a href="#">链接二</a></li>
	<li><a href="#">链接三</a></li>
	<li><a href="#">链接四</a></li>
    </ul>
	<div>
	  <div align="center">Recently visited</div>
	</div>
    <table width="200" border="0">
      <tr>
        <td width="95" align="center"><div align="center">
          <p><img name="" src="" width="64" height="64" alt="" /></p>
          <p>This<br />
          </p>
        </div></td>
        <td width="95" align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
        <p>This</p></td>
      </tr>
      <tr>
        <td align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
        <p>This</p></td>
        <td align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
        <p>This</p></td>
      </tr>
    </table>
    <p align="right">More...</p>
    <!-- end .sidebar1 --></div>
	<!-- 是~注释吗~-->
  <div class="content">
  	<div>
  	  <table border="0" align="center" cellspacing="5">
  	    <tr>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
  	      <td width="160" height="210" bgcolor="#009999"><img src="Untitled-1_VCV`{22OL_X3]4%X8WJ0VIL.jpg" /></td>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
        </tr>
  	    <tr>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
  	      <td width="160" height="210" bgcolor="#009999">&nbsp;</td>
        </tr>
      </table>
  	</div>
  	<h1>&nbsp;</h1>
  	<h1>说明</h1>
  	<div id="TabbedPanels1" class="TabbedPanels">
  	  <ul class="TabbedPanelsTabGroup" style="text-align:center">
  	    <li class="TabbedPanelsTab" tabindex="0">标签 1</li>
  	    <li class="TabbedPanelsTab" tabindex="0">标签 2</li>
		<li class="TabbedPanelsTab" tabindex="0">标签 3</li>
      </ul>
  	  <div class="TabbedPanelsContentGroup">
  	    <div class="TabbedPanelsContent">
		xsk!
		</div>
  	    <div class="TabbedPanelsContent">内容 2</div>
		<div class="TabbedPanelsContent">内容 3</div>
      </div>
    </div>
<p>请注意，这些布局的 CSS 带有大量注释。如果您的大部分工作都在设计视图中进行，请快速浏览一下代码，获取有关如何使用固定布局 CSS 的提示。您可以先删除这些注释，然后启动您的站点。要了解有关这些 CSS 布局中使用的方法的更多信息，请阅读 Adobe 开发人员中心上的以下文章：<a href=http://www.adobe.com/go/adc_css_layouts">http://www.adobe.com/go/adc_css_layouts</a>。</p>
    <p>&nbsp;</p>
    <h2>清除方法</h2>
    <p>由于所有列都是浮动的，因此，此布局在 .footer 规则中采用 clear:both 声明。此清除方法强制使 .container 了解列的结束位置，以便显示在 .container 中放置的任何边框或背景颜色。如果您的设计要求您从 .container 中删除 .footer，则需要采用其它清除方法。最可靠的方法是在最后一个浮动列之后（但在 .container 结束之前）添加 &lt;br class="clearfloat" /&gt; or &lt;div class="clearfloat"&gt;&lt;/div&gt;。这具有相同的清除效果。</p>
    <h3>徽标替换</h3>
    <p>此布局的 .header 中使用了图像占位符，您可能希望在其中放置徽标。建议您删除此占位符，并将其替换为您自己的链接徽标。 </p>
    <p> 请注意，如果您使用属性检查器导航到使用 SRC 字段的徽标图像（而不是删除并替换占位符），则应删除内嵌背景和显示属性。这些内嵌样式仅用于在浏览器中出于演示目的而显示徽标占位符。 </p>
    <p>要删除内嵌样式，请确保将 CSS 样式面板设置为“当前”。选择图像，然后在“CSS 样式”面板的“属性”窗格中右键单击并删除显示和背景属性。（当然，您始终可以直接访问代码，并在其中删除图像或占位符的内嵌样式。）</p>
    <h4>背景</h4>
    <p>本质上，任何 div 中的背景颜色将仅显示与内容一样的长度。这意味着，如果要使用背景颜色或边框创建侧面列的外观，将不会一直扩展到脚注，而是在内容结束时停止。如果 .content div 将始终包含更多内容，则可以在 .content div 中放置一个边框将其与列分开。</p>
  <!-- end .content --></div>
  <div class="footer">
    <p>此 .footer 包含声明 position:relative，以便为 .footer 指定 Internet Explorer 6 hasLayout，并使其以正确方式清除。如果您不需要支持 IE6，则可以将其删除。</p>
    <!-- end .footer --></div>
<!-- end .container --></div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
