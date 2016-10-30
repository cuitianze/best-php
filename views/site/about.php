<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$notes =  array(
    array(
        'date' => 'shij',
        'note' => 'http://www.yiichina.com/doc/guide/2.0/start-databases',
    ),
    array(
        'date' => 'shij',
        'note' => 'http://www.yiichina.com/doc/guide/2.0/start-databases',
    )
);
//return \yii\helpers\Json::encode($notes);
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php var_dump($notes) ?>

    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <?= !empty($note->date) ? $note->date : '' ?>
                <?= !empty($note->note) ? $note->note : '' ?>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
