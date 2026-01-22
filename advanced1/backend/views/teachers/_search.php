<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var frontend\models\TeachersSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teachers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Фамилия') ?>

    <?= $form->field($model, 'Имя') ?>

    <?= $form->field($model, 'Отчество') ?>

    <?= $form->field($model, 'Должность') ?>

    <?php // echo $form->field($model, 'Ученая_степень') ?>

    <?php // echo $form->field($model, 'Кафедра') ?>

    <?php // echo $form->field($model, 'Электронная_почта') ?>

    <?php // echo $form->field($model, 'Телефон') ?>

    <?php // echo $form->field($model, 'Стаж_работы') ?>

    <div class="form-group">
        <?= Html::submitButton('Поиск', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Перезагрузить', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
