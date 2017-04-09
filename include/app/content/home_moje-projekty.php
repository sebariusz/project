<form action="" method="POST">
<?php $c = new Home_controller(); ?>


	<label class="col-xs-1">Tytuł: </label><input value="<?php $c->show_value('title'); ?>" name="title" class="col-xs-11">
	<label class="col-xs-1">Opis: </label><textarea name="description" class="col-xs-11"><?php $c->show_value('description'); ?></textarea>
</form>