<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\Teachers $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="teachers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Фамилия')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Имя')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Отчество')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Должность')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Ученая_степень')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Кафедра')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Электронная_почта')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Телефон')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Стаж_работы')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
