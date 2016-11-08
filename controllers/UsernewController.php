<?php

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\UserNew;

class UsernewController extends Controller
{
    public function actionIndex()
    {
        $user = UserNew::findOne('6');
        //echo 'Old: ' . $user->name . '<br />';

        $user->name = 'Tom';
        //echo 'New: ' .  $user->name . '<br />';
        $user->save();

//        $user2 = UserNew::findOne('4');
//        $user2->delete();

        $newUser = new UserNew();
        $newUser->name = 'Spike';
        $newUser->save();

        $query = UserNew::find();

        $pagination = new Pagination([
            'defaultPageSize' => 5,
            'totalCount' => $query->count(),
        ]);

        $users = $query->orderBy('id')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('index', [
            'users' => $users,
            'pagination' => $pagination,
        ]);
    }
}