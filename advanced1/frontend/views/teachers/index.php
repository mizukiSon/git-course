<?php

use common\models\Teachers;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var backend\models\TeachersSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Преподаватели';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teachers-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'Фамилия',
            'Имя',
            'Отчество',
            'Должность',
            'Ученая_степень',
            'Кафедра',
            'Электронная_почта',
            'Телефон',
            'Стаж_работы',
        // Вместо ActionColumn делаем простую ссылку
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view}',
                'contentOptions' => ['style' => 'width: 50px;'],
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a(
                            'Просмотр',
                            ['view', 'id' => $model->id],
                            ['class' => 'btn btn-xs btn-info']
                        );
                    }
                ]
            ],
        ],
        'layout' => "{items}\n{pager}",
        'pager' => [
            'options' => ['class' => 'pagination pagination-sm'],
            'hideOnSinglePage' => true,
        ],
    ]); ?>


</div>
