<?php
use yii\helpers\Html;
?>

<p>Вы успешно добавили юзера с такими данными:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
    <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
</ul>