<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title><?php echo $this->pageTitle; ?></title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
    </head>

    <body>
        <div id="container">
            <div id="header">
                <div id='top'>
                    <div id="logo"><a href="/grbacd/"><b class='ro_logo'>&nbsp;</b></a> grbac admin</div>
                    <div id="greet">
                        <?//php $this->widget('application.components.GreetUser'); ?>
                    </div>
                </div>
                <div style="clear:both"></div>
                <div class="navigation"><br />
                    <?php echo CHtml::link('Home',Yii::app()->homeUrl); ?> |
                    <?php echo CHtml::link('Features',Yii::app()->homeUrl); ?> |
                    <?php echo CHtml::link('Install Document', CController::createUrl('/site/doc_grbac')); ?> |
                    <?php echo CHtml::link('gRbac', CController::createUrl('/grbac/admin/manage')); ?> |
                    <?php echo CHtml::link('<b class="srbac_mm">&nbsp;</b>sRbac',  array('/srbac/authitem/manage'))?>
                </div>
            </div>
            <div style="clear:both"></div><br />

            <div id="content">
                <h2>My Account Dashboard for <?=Yii::app()->user->username?></h2> <hr />
                <?php echo $content; ?>
            </div>

            <div style="clear:both"><br /></div>
            <div id="footer"><a href="http://localhost/">main home</a></div>
        </div>
    </body>
</html>