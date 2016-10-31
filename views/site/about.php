
<?php

class Note {
    var $date;
    var $note;
}

?>
<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$notes = array();

$note1 = new Note();
$note1->date = "2016年10月30日22:59:05";
$note1->note = 'http://www.yiichina.com/doc/guide/2.0/start-databases';
$note1->link = true;
array_push($notes, $note1);

$note2 = new Note();
$note2->date = "2016年10月31日15:26:32";
$note2->note = 'PHP对象存入数组, 生成静态的关于页';
$note2->link = false;
array_push($notes, $note2);

$note3 = new Note();
$note3->date = "2016年10月31日15:33:40";
$note3->note = 'PHP内嵌HTML中的if-else判断';
$note3->link = false;
array_push($notes, $note3);

$note4 = new Note();
$note4->date = "2016年10月31日23:16:46";
$note4->note = 'Gii基本用法生成models, controller, views';
$note4->link = false;
array_push($notes, $note4);

$note5 = new Note();
$note5->date = "2016年10月31日23:56:26";
$note5->note = 'http://www.yiichina.com/doc/guide/2.0/structure-applications?未看完';
$note5->link = true;
array_push($notes, $note5);

//return \yii\helpers\Json::encode($notes);
?>

<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <ul>
        <?php foreach ($notes as $note): ?>
            <li>
                <?= !empty($note->date) ? $note->date : '' ?>
                <?php if ($note->link): ?>
                    <a href="<?= $note->note ?>" target="_blank"><?= $note->note ?></a>
                <?php else: ?>
                    <?= $note->note ?>
                <?php endif ?>
            </li>
        <?php endforeach; ?>
    </ul>

</div>
