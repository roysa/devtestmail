<?php $this->beginContent('webroot.themes.material.views.layouts.blank'); ?>
<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <h1>DEVTESTMAIL</h1>
                <p class="lead">Simple email send testing</p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <?php if (Yii::app()->user->isGuest) : ?>
                <div class="well infobox">
                    <?php $this->widget('application.widgets.user.LoginFormWidget') ?>
                </div>
                <?php else : ?>
                <div class="well infobox">
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?= $content ?>
</div>
<?php $this->endContent(); ?>