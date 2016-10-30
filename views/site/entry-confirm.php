<?php
/**
 * Created by PhpStorm.
 * User: Tianze
 * Date: 16/10/30
 * Time: 下午3:23
 */
use yii\helpers\Html;

?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>