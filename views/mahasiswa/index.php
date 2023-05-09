<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
/** @var yii\web\View $this */
?>

<hi>mahasiswa</hi>
<ul>
<?php foreach ($countries as $mahasiswa) : ?>
    <li>
        <?= Html::encode("{$mahasiswa->nama} ({$mahasiswa->jurusan} ({$mahasiswa->alamat})") ?>:
        <?= $mahasiswa->population ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination=> $pagination']) ?>