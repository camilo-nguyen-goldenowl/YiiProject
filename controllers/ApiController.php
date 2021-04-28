<?php

namespace app\controllers;

use Yii;
use app\models\Posts;
use app\models\PostsSearch;
use yii\base\BaseObject;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\ActiveController;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PostsController implements the CRUD actions for Posts model.
 */
class ApiController extends ActiveController
{

   public function actions()
   {
       $actions = parent::actions();
       unset($actions['create']);
       unset($actions['update']);
       unset($actions['delete']);
       unset($actions['view']);
       unset($actions['index']);
       return $actions;
   }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => HttpBearerAuth::className(),
        ];
        return $behaviors;

    }

}
