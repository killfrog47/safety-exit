
<div class="wrap" id="sftExt_admin">
	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<form method="post" action="options.php">
					<?php
						settings_fields( 'pluginPage' );
						do_settings_sections( 'pluginPage' );
						submit_button();
					?>
				</form>
			</div>
			<!-- <div class="col">
				<h2>Button Preview</h2>
				<?php include_once( 'frontend-button.php' ); ?>
			</div> -->
		</div>
	</div>


</div>

