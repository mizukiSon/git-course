<?php
use yii\helpers\Html;
$this->title = 'Специальности';
?>

<div class="site-about">
    <h1>Специальности</h1>

    <p class="about-intro">
        В нашем техникуме учатся на разных специальностях, таких как:
    </p>
    
    <div class="specialties-list">
        <ul>
            <li>18.02.09 Переработка нефти и газа</li>
            <li>09.02.07 Информационные системы и программирование</li>
            <li>13.02.11 Техническая эксплуатация и обслуживание электрического и электромеханического оборудования</li>
            <li>38.02.01 Экономика и бухгалтерский учет</li>
            <li>15.02.17 Монтаж техническое обслуживание, эксплуатация и ремонт промышленного оборудования</li>
            <li>и другие специальности</li>
        </ul>
    </div>

    <div class="photo-container">
        <div class="row">
            <div class="col-md-4 text-center">
                <img src="/images/pro.jpeg" alt="Программирование">
                
                <p class="specialty-caption">Программирование</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/mex.jpeg" alt="Механика">
                <p class="specialty-caption">Механика</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/buh.jpeg" alt="Бухгалтерия">
                <p class="specialty-caption">Бухгалтерия</p>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <img src="/images/el.jpeg" alt="Электрика">
                <p class="specialty-caption">Электрика</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/nef.jpeg" alt="Нефтепереработка" ?>
                <p class="specialty-caption">Нефтепереработка</p>
            </div>
            <div class="col-md-4 text-center">
                <img src="/images/him.jpeg" alt="Химия">
                <p class="specialty-caption">Химия</p>
            </div>
        </div>
    </div>
</div>