<?php

/* @var $this \yii\web\View */
/* @var $versionList array */

$this->title = t('this/main', 'title');

?>

<div class="container">
	<div class="row">
		<div class="col-md-9" role="main">
			<div class="page-header">
				<h1><?= t('this/main', 'version_list') ?></h1>
			</div>
			<ul class="list-group">
				<?php foreach ($versionList as $version) { ?>
					<a class="list-group-item" href="<?= param('url.api') . $version ?>">
						<?= $version ?>
					</a>
				<?php } ?>
			</ul>
		</div>

	</div>
</div>
