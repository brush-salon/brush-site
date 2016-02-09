<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <link href="/src/main.css?<?=time()?>" rel="stylesheet">
    <!--<link href="src/main.css?<?=time()?>" rel="stylesheet">-->
</head>
<body>
<? include '__modal.php'?>

<div class="container">
    <? include '__header.php'?>
    <?=$content ?>
</div>
<? include '__footer.php'?>
<script src="<?=Url::to('@web/src/bundle.js')?>"></script>
<script>
    window.page = new PageController(<?=Yii::$app->controller->action->id?>, <?=Yii::$app->layout?>);
</script>
</body>
</html>