<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "students".
 *
 * @property int $id
 * @property string $Фамилия
 * @property string $Имя
 * @property string|null $Отчество
 * @property string $Группа
 * @property string|null $Дата_рождения
 * @property string|null $Электронная_почта
 * @property string|null $Телефон
 * @property float|null $Средний_балл
 */
class Students extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Отчество', 'Дата_рождения', 'Электронная_почта', 'Телефон', 'Средний_балл'], 'default', 'value' => null],
            [['Фамилия', 'Имя', 'Группа'], 'required'],
            [['Дата_рождения'], 'safe'],
            [['Средний_балл'], 'number'],
            [['Фамилия', 'Имя', 'Отчество'], 'string', 'max' => 50],
            [['Группа', 'Телефон'], 'string', 'max' => 20],
            [['Электронная_почта'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Фамилия' => 'Фамилия',
            'Имя' => 'Имя',
            'Отчество' => 'Отчество',
            'Группа' => 'Группа',
            'Дата_рождения' => 'Дата Рождения',
            'Электронная_почта' => 'Электронная Почта',
            'Телефон' => 'Телефон',
            'Средний_балл' => 'Средний Балл',
        ];
    }

}
