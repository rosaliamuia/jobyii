<?php

namespace frontend\controllers;

use frontend\models\Jobpost;
use yii\web\Controller;
use frontend\models\Savedjobs;



class ProductsController extends Controller
{
    public function actionIndex($id)
    {
        $product = JobPost::findOne($id);
        return $this->render('index', ['products'=>$product]);

    }
}