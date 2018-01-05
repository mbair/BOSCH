<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "esemenyek".
 *
 * @property integer $id
 * @property string $statusz
 * @property string $helyszin
 * @property string $csoportok
 * @property string $temakorok
 * @property string $hrl_munkatars
 * @property integer $Jelentkezokmaxszama
 * @property string $megjegyzes
 */
class Esemenyek extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'esemenyek';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['statusz', 'helyszin', 'csoportok', 'temakorok', 'hrl_munkatars', 'Jelentkezokmaxszama', 'megjegyzes'], 'required'],
            [['statusz', 'megjegyzes'], 'string'],
            [['Jelentkezokmaxszama'], 'integer'],
            [['helyszin', 'csoportok', 'temakorok', 'hrl_munkatars'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'statusz' => 'Státusz',
            'helyszin' => 'Helyszín',
            'csoportok' => 'Csoportok',
            'temakorok' => 'Témakör',
            'hrl_munkatars' => 'HRL Munkatárs',
            'Jelentkezokmaxszama' => 'Jelentkezők maximális száma',
            'megjegyzes' => 'Megjegyzés',
        ];
    }
}
