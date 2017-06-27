<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii2lab\helpers\Page;

?>

<?php Page::beginDraw() ?>

<!DOCTYPE HTML>
<html>
<head>
	<title><?= $this->title ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.3.0/styles/default.min.css">
</head>
<body>
	<?= $content ?>
</body>
</html>

<?php Page::endDraw() ?>