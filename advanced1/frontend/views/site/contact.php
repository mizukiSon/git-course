<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\ContactForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\captcha\Captcha;

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1 class="text-center"><?= Html::encode($this->title) ?></h1>
    
    <p>Здесь вы можете ознакомиться с нашим руководством</p>

    <div class="container">
        <!-- Первая строка -->
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Директор</h2>
                    <div class="my-3">
                        <img src="/images/dir.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Коновалов Мартын Протасьевич</p>
                        <p class="mb-0">7(0251)601-81-17</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Зам.Директора</h2>
                    <div class="my-3">
                        <img src="/images/zam.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Гуляева Дарина Гордеевна</p>
                        <p class="mb-0">7(068)146-74-44</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Соц.педагог</h2>
                    <div class="my-3">
                        <img src="/images/so.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Иванов Артем Ильяович</p>
                        <p class="mb-0">7(710)676-35-14</p>
                    </div>
                </div>
            </div>
        </div> 

        <!-- Вторая строка --> 
        <div class="row">
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Психолог</h2>
                    <div class="my-3">
                        <img src="/images/psi.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Назаренко Алексей Николаевич</p>
                        <p class="mb-0">7(586)741-55-07</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Преподаватель</h2>
                    <div class="my-3">
                        <img src="/images/pre.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Лебедева Нина Анатольевна</p>
                        <p class="mb-0">7(726)360-89-46</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-3">
                <div class="text-center">
                    <h2>Завхоз</h2>
                    <div class="my-3">
                        <img src="/images/sav.jpeg" alt="АПТ" class="img-fluid">
                    </div>
                    <div class="contact-info">
                        <p class="mb-0">Богданов Флор Богданович</p>
                        <p class="mb-0">7(125)258-69-55</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>