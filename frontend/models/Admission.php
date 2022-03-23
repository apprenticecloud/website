<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "admission".
 *
 * @property int $adminId
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $class_dates
 * @property string $gender
 * @property string $phone_number
 * @property string $place
 * @property string $advert_place
 * @property string $kin_name
 * @property string $kin_phone
 * @property string $kin_relationship
 * @property string $kin_email
 * @property string $internet_access
 * @property string $internet_limit
 */
class Admission extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'admission';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['first_name', 'last_name', 'email', 'class_dates', 'gender', 'phone_number', 'place', 'advert_place', 'kin_name', 'kin_phone', 'kin_relationship', 'kin_email', 'internet_access', 'internet_limit'], 'required'],
            [['class_dates', 'gender', 'place', 'advert_place', 'internet_access', 'internet_limit'], 'string'],
            [['first_name', 'last_name', 'email', 'phone_number', 'kin_name', 'kin_phone', 'kin_relationship', 'kin_email'], 'string', 'max' => 233],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'adminId' => 'Admin ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'class_dates' => 'Class Dates',
            'gender' => 'Gender',
            'phone_number' => 'Phone Number',
            'place' => 'Place',
            'advert_place' => 'Advert Place',
            'kin_name' => 'Kin Name',
            'kin_phone' => 'Kin Phone',
            'kin_relationship' => 'Kin Relationship',
            'kin_email' => 'Kin Email',
            'internet_access' => 'Internet Access',
            'internet_limit' => 'Internet Limit',
        ];
    }
}
