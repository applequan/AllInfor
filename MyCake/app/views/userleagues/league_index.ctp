<div class="userleagues leagueIndex">

<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?>
</p>

<?php
$i = 0;
foreach ($userleagues as $userleague):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
		<td class="actions">
			<?php
				echo $html->link(__("----".$userleague['Userleague']['lName']."----", true), array('action' => 'displayLeaguesNotice', $userleague['Userleague']['id'])); 
			?>
		</td>
	</tr>
<?php endforeach; ?>