<?php

class LoginFormWidget extends CWidget
{
    
    public $model = null;
    
    public function run()
    {
        if (!$this->model) {
            $this->model = new LoginForm();
        }
        $this->render('login_form', array('model' => $this->model));
    }
}
