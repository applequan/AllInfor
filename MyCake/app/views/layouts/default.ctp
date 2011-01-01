<?php
/* SVN FILE: $Id$ */
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) :  Rapid Development Framework (http://www.cakephp.org)
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          http://www.cakefoundation.org/projects/info/cakephp CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.console.libs.templates.skel.views.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @version       $Revision$
 * @modifiedby    $LastChangedBy$
 * @lastmodified  $Date$
 * @license       http://www.opensource.org/licenses/mit-license.php The MIT License
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');

		echo $html->css('twoColFixRtHdr');
		
		echo $html->css('SpryAssets/SpryTabbedPanels');
		

		echo $scripts_for_layout;
	?>
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
		  <div align="center"><a href="http://localhost/MyCake/posters/index">海报墙</a></div>
		</li>
		<li>
		  <div align="center"><a href="http://localhost/MyCake/userleagues/leagueIndex">社团</a></div>
		</li>
		<li>
		  <div align="center"><a href="http://localhost/MyCake/userclasses/schoolIndex">班级</a></div>
		</li>
		</ul>
		</div>
		</div>	 
	  </div> <!-- end .header -->
	  
	  <div class="sidebar1">
		<ul class="nav">
		<div align="center">Top of today </div>
			<li><a href="#">Google camp招新</a></li>
			<li><a href="#">青协举办志愿在我心中活动</a></li>
			<li><a href="#">360举办电脑免费体检</a></li>
			<li><a href="#">腾讯QQ管家入校园</a></li>
		</ul>
			
		<div align="center">Recently visited</div>
			
			<table width="200" border="0">
				  <tr>
					<td width="95" align="center"><div align="center">
					  <p><img name="" src="" width="64" height="64" alt="" /></p>
					  <p>08数媒<br />
					  </p>
					</div></td>
					<td width="95" align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
					<p>Microsoft俱乐部</p></td>
				  </tr>
				  <tr>
					<td align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
					<p>Google camp</p></td>
					<td align="center"><p><img name="" src="" width="64" height="64" alt="" /></p>
					<p>10行管</p></td>
				  </tr>
			</table>
			<p align="right">More...</p>
    <!-- end .sidebar1 -->
	</div>
	<!-- 是~注释吗~-->


	<div id="container">
		<div id="content" style="background-color:#FFCCCC;height:1000px">

			<?php $session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
	</div>
	<?php echo $cakeDebug; ?>

	 <div class="footer"></div>
		<!-- end .footer -->
</div><!-- end .container -->

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
