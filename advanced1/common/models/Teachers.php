<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teachers".
 *
 * @property int $id
 * @property string $Фамилия
 * @property string $Имя
 * @property string|null $Отчество
 * @property string $Должность
 * @property string|null $Ученая_степень
 * @property string $Кафедра
 * @property string|null $Электронная_почта
 * @property string|null $Телефон
 * @property int|null $Стаж_работы
 */
class Teachers extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teachers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Отчество', 'Ученая_степень', 'Электронная_почта', 'Телефон', 'Стаж_работы'], 'default', 'value' => null],
            [['Фамилия', 'Имя', 'Должность', 'Кафедра'], 'required'],
            [['Стаж_работы'], 'integer'],
            [['Фамилия', 'Имя', 'Отчество', 'Ученая_степень'], 'string', 'max' => 50],
            [['Должность', 'Кафедра', 'Электронная_почта'], 'string', 'max' => 100],
            [['Телефон'], 'string', 'max' => 20],
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
            'Должность' => 'Должность',
            'Ученая_степень' => 'Ученая Степень',
            'Кафедра' => 'Кафедра',
            'Электронная_почта' => 'Электронная Почта',
            'Телефон' => 'Телефон',
            'Стаж_работы' => 'Стаж Работы',
        ];
    }

}
