<div class="userclasses classIndexInSchool">
<h2><?php __('班级');?></h2>

<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?>
</p>
 

<?php
$i = 0;
foreach ($userclasses as $userclass):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
	if ($userclass['Userclass']['school'] == $school) {
?>
		<td class="actions">
			<?php echo $html->link(__($userclass['Userclass']['cName'], true), array('action' => 'DisplayClassMessage', $userclass['Userclass']['id'])); ?>
		</td>
	</tr>
	<?php } ?>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
  	<h1>&nbsp;</h1>

<script type="text/javascript">
var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
</script>



