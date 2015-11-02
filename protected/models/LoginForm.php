<?php

class LoginForm extends CFormModel
{
    
    public $login;
    public $password;
    
    public function rules()
    {
        return array(
            array('login,password', 'required'),
            array('login,password', 'safe'),
        );
    }
    
    public function login()
    {
        $identity = new UserIdentity($this->login, $this->password);
        if ($identity->authenticate()) {
            return Yii::app()->user->login($identity);
        } else {
            $this->addError('password', 'login failed');
        }
        return false;
    }
    
    public function getLastError()
    {
        $e = $this->getErrors();
        $e = end($e);
        return end($e);
    }
    
}