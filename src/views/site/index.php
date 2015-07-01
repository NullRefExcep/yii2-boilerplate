<?php
use yii\helpers\Url;

/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<div class="site-index">
    <h1>Hello world</h1>
    <a href="<?= Url::to(['/core/admin']) ?>">Admin</a>
    <pre>
        <?php print_r(Yii::$app->modules) ?>


    </pre>
</div>
