<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\Teachers $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Преподаватели', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="teachers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'Фамилия',
            'Имя',
            'Отчество',
            'Должность',
            'Ученая_степень',
            'Кафедра',
            'Электронная_почта',
            'Телефон',
            'Стаж_работы',
        ],
    ]) ?>

</div>
