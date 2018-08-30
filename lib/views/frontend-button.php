<?php
	$sftExtSettings = get_option('sftExt_settings',array('sftExt_position' => 'bottom right', 'sftExt_type' => 'rectangle'));
	$classes = $sftExtSettings['sftExt_position'] . ' ' . $sftExtSettings['sftExt_type'];
?>

<aside id="sftExt-frontend-button" class="<?= $classes; ?>">
	<div class="sftExt-inner">Safety Exit</div>
</aside>