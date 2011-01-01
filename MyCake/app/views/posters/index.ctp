

<?php	
echo $javascript->link('prototype');
echo $javascript->link('SpryTabbedPanels');
echo $javascript->link('poster');

echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?>
<body>

  <div class="content">
  	<div id="PosterWall" style="background-color:#FFCCCC">
  	  <table border="0" align="center" cellspacing="5">
	  <tr>
		<?php
		$i = 1;
		foreach ($posters as $poster):
			$class = null;
			if (($i+1) % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>

		<td width="180" height="210" bgcolor="#cc9966">
			<?php $url = 'http://localhost/MyCake/userleagues/displayLeaguesNotice/'.$poster['Poster']['id']; 
				  $src = 'http://localhost/MyCake/app/webroot/itemimages/'.$poster['Poster']['imageName'];
			?>
			
			<img src="<?=$src?>" width="150" height="200" alt="<?=$url?>"/>
			
			
		</td>
		<?php 
		
			
			if ($i == 4) {
				echo "</tr><tr>";
				$i = 0;
			}
			$i = $i + 1;
	
		?>
		<?php endforeach; ?>
		</tr>
	  </table>
  	</div>  
 <!-- end .footer --><div class="footer"></div>
<!-- end .container --></div>
<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>
</body>
</html>
