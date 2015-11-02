<?php

class WebUser extends CWebUser
{
    
    private $_model = null;
    
    public function getModel()
    {
        if ($this->_model === null) {
            if ($this->isGuest) {
                $this->_model = false;
            } else {
                $this->_model = User::model()->findByPk($this->id);
            }
        }
        return $this->_model;
    }
}