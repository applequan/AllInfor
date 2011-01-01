<div class="userclasses schoolIndex">
<h2><?php __('Schools');?></h2>

<div class="actions">
	<ul>
		<li><?php echo $html->link(__('软件学院', true), array('controller' => 'userclasses', 'action' => 'classIndexInSchool', 'SolfwareSchool')); ?></li>
		<li><?php echo $html->link(__('岭南学院', true), array('controller' => 'userclasses', 'action' => 'classIndexInSchool', 'EcoSchool')); ?> </li>
		<li><?php echo $html->link(__('政治与公共事务学院', true), array('controller' => 'userclasses', 'action' => 'classIndexInSchool', 'PoliticalSchool')); ?> </li>
	</ul>
</div>


