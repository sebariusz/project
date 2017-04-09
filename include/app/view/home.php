<?php require 'include/header.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-xs-4">
				<?php $c->home_menu(); ?>
			</div>
			<div class="col-xs-8 padding">
				<?php $c->load_content(); ?>
			</div>
		</div>
	</div>
<?php require 'include/footer.php'; ?>