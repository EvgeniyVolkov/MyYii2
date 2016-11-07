<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
    <h1>Users</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= Html::encode("{$user->name}") ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>