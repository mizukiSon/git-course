<?php

use common\models\Students;
use yii\helpers\Html;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var frontend\models\StudentsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Список студентов';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="students-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            
            'Фамилия',
            'Имя',
            'Отчество',
            'Группа',
            [
                'attribute' => 'Дата_рождения',
                'format' => ['date', 'php:d.m.Y'],
            ],
            [
                'attribute' => 'Электронная_почта',
                'format' => 'email',
            ],
            'Телефон',
            'Средний_балл:decimal',
            
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