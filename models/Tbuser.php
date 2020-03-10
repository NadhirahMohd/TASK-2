<?php

namespace app\models;

use Yii;
use yii\base\NotSupportedException;
use yii\db\ActiveRecord;
use yii\helpers\Security;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "tbuser".
 *
 * @property int $cliduser
 * @property string $clname
 * @property string $clemail
 * @property string $cldate
 */
class Tbuser extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbuser';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clname', 'clemail', 'cldate'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cliduser' => 'Id User',
            'clname' => 'Name',
            'clemail' => 'Email',
            'cldate' => 'Date',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TbuserQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TbuserQuery(get_called_class());
    }
}
