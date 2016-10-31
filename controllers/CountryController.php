<?php
/**
 * Created by PhpStorm.
 * User: Tianze
 * Date: 16/10/30
 * Time: 下午10:17
 */

namespace app\controllers;

use yii\web\Controller;
use yii\data\Pagination;
use app\models\Country;


class CountryController extends Controller
{
    public function actionIndex($pageSize = 5)
    {
        $query = Country::find();
        $pagination = new Pagination([
            'defaultPageSize' => $pageSize,
            'totalCount' => $query->count(),
        ]);
        $countries = $query->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();
//        return \yii\helpers\Json::encode($countries);
        return $this->render('index', [
            'countries' => $countries,
            'pagination' => $pagination
        ]);
    }
    public function actionList() {
        $countries = Country::find()->orderBy('name')->all();

        $notes[0] =  array(
            'date' => '2016年10月30日22:59:05',
            'note' => 'http://www.yiichina.com/doc/guide/2.0/start-databases'
        );
        return \yii\helpers\Json::encode($notes);
    }
}