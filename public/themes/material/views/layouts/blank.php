<!DOCTYPE html>
<html>

    <head>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= Yii::app()->theme->baseUrl ?>/css/roboto.min.css" rel="stylesheet">
        <link href="<?= Yii::app()->theme->baseUrl ?>/css/material.min.css" rel="stylesheet">
        <link href="<?= Yii::app()->theme->baseUrl ?>/css/ripples.min.css" rel="stylesheet">
        
        <title><?= $this->pageTitle ?></title>
        
    </head>

    <body>
        
        <?= $content ?>
        
        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

        <script src="<?= Yii::app()->theme->baseUrl ?>/js/ripples.min.js"></script>
        <script src="<?= Yii::app()->theme->baseUrl ?>/js/material.min.js"></script>
        <script>
            $(document).ready(function() {
                $.material.init();
            });
        </script>

    </body>

</html>
