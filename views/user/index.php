<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
use app\models\UserNew;

    $user = UserNew::findOne('4');
    echo 'Old: ' . $user->name . '<br />';

    $user->name = 'Steavy';
    echo 'New: ' .  $user->name . '<br />';
    $user->save();

    //$user2 = UserNew::findOne('5');
    //$user2->delete();

//    $user = UserNew::find()->orderBy('name')->all();
//    echo '<pre>';
//    print_r($user);
//    echo '</pre>';

?>

    <h1>Users:</h1>
    <ul>
        <?php foreach ($users as $user): ?>
            <li>
                <?= Html::encode("{$user->name}") ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>