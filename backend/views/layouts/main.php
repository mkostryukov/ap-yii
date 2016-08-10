<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AdminLTEAssetBundle;
use backend\helpers\AdminLTEAssetHelper;
use yii\helpers\Html;

AdminLTEAssetBundle::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="<?= AdminLTEAssetHelper::bodyClass() ?> <?= AdminLTEAssetHelper::skinClass() ?>">
<?php $this->beginBody() ?>

<div class="wrapper">

    <?= $this->render(
        'header.php'
    ) ?>

    <?= $this->render(
        'left.php'
    ) ?>

    <?= $this->render(
        'content.php',
        ['content' => $content]
    ) ?>

    <?= $this->render(
        'footer.php'
    ) ?>

    <?= AdminLTEAssetHelper::rightSidebar()?$this->render('right.php'):'' ?>

</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
