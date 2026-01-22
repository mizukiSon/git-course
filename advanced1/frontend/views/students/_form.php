<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Students $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="students-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Отчество')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Группа')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Дата_рождения')->textInput() ?>

    <?= $form->field($model, 'Электронная_почта')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Телефон')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Средний_балл')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
