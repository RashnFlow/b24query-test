<?php

namespace app\models;

use app\models\b24\CrmCategoryActiveRecord;

class B24Category extends CrmCategoryActiveRecord
{

    public static function entityTypeId()
    {
        return 174;
    }

    //переделать
//    public function rules()
//    {
//
//        return [
//            // атрибут required указывает, что name, email, subject, body обязательны для заполнения
//            [[
//                "id",
//                "title",
//                "opened",
//            ], 'safe'],
//        ];
//    }

    /**
     * @return array
     */
//    public function attributeLabels()
//    {
//        return [
//            "id" => '',
//            "title" => '',
//            "opened" => '',
//        ];
//    }

    public function fields()
    {
        return [
            'id',
            'title' => 'name',
            //'opened',
            //'test' => 'title'
        ];
    }

    /**
     * Переопределяет столбцы которые нужно выбирать из битрикс24 для оптинизации запроса
     * @return array
     */
//    public function attributes()
//    {
//        return [
//            'id',
//            'title',
//            'opened'
//        ];
//    }
}