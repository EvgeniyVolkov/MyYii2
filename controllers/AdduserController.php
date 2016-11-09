<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\AddUserForm;
use app\models\AddedUsers;

class AdduserController extends Controller
{
    public function actionAdduser()
    {
        $model = new AddUserForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            // данные в $model удачно проверены

            $userToAdd = new AddedUsers();
            $userToAdd->name = $model->name;
            $userToAdd->email = $model->email;
            $userToAdd->save();
            // делаем что-то полезное с $model ...

            return $this->render('adduser-confirm', ['model' => $model]);
        } else {
            // либо страница отображается первый раз, либо есть ошибка в данных
            return $this->render('adduser', ['model' => $model]);
        }
    }
}