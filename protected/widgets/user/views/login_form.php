<?php /* @var $model \LoginForm */ ?>
<?php $form=$this->beginWidget('CActiveForm', array(
    'method' => 'post',
    'action' => Yii::app()->createUrl('site/login'),
    'htmlOptions' => array(
        'class' => 'form inline login',
    ),
)); ?>
    <div class="row">
        <div class="col-md-5 form-group <?php if ($model->hasErrors('login')) echo 'has-error'; ?>">
            <div class="form-control-wrapper">
                <?php $ic = 'form-control ' . (!$model->login ? 'empty' : ''); ?>
                <?= $form->textField($model, 'login', array('class' => $ic)) ?>
                <div class="floating-label">login</div>
                <span class="material-input"></span>
            </div>
        </div>
        <div class="col-md-5 form-group <?php if ($model->hasErrors('password')) echo 'has-error'; ?>">
            <div class="form-control-wrapper">
                <?php $ic = 'form-control ' . (!$model->password ? 'empty' : ''); ?>
                <?= $form->passwordField($model, 'password', array('class' => $ic)) ?>
                <div class="floating-label">password</div>
                <span class="material-input"></span>
            </div>
        </div>
        <div class="col-md-2 text-center">
            <button class="btn btn-fab btn-fab-mini btn-sm btn-raised btn-primary"><i class="mdi-navigation-arrow-forward"></i><div class="ripple-wrapper"></div></button>
        </div>
    </div>
    <?php if ($model->hasErrors()) : ?>
    <div class="row">
        <div class="col-md-12">
            <p class="text-danger"><?= CHtml::encode($model->getLastError()) ?></p>
        </div>
    </div>
    <?php endif; ?>

<?php $this->endWidget(); ?>