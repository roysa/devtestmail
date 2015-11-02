<?php

/**
 * 
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $registered
 * @property boolean $active
 * @property boolean $admin
 * 
 */
class User extends CActiveRecord
{
    
    
    public function tableName()
    {
        return 'user';
    }
    
    public function attributeLabels() {
        return array(
            'id' => '#',
            'username' => 'Username',
            'password' => 'Password',
            'email' => 'Email',
            'active' => 'Is active',
            'registered' => 'Registered',
            'admin' => 'Is admin',
        );
    }
    
    public function rules()
    {
        return array(
            array('id', 'numerical', 'integerOnly' => true),
            array('username, active, registered', 'required'),
            array('username,password,email', 'length', 'max' => 128),
            array('active,admin', 'numerical', 'integerOnly' => true),
        );
    }
    
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }
    
    public function beforeSave() {
        if ($this->isNewRecord) {
            $this->registered = new CDbExpression('NOW()');
        }
        return parent::beforeSave();
    }
}