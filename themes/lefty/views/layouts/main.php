<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="container" id="page">
        
        <!--<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header --> 
        
        <div id="mainmenu" style="text-align: center;">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'Item','url'=>array('ProjItem/main')),
                                array('label'=>'Project','url'=>array('Project/create')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                                /*array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>!Yii::app()->user->isGuest),
                                array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),*/
                                
			),
		)); ?>
            <div id="myHome">
                <?php if(isset(Yii::app()->user->project_id)) 
                    { 
                        echo Yii::app()->user->project_id; 
                    }
                    elseif (isset(Yii::app()->user->user_id))
                    {
                        
                        $projects = Beaver::model()->findAll(array(
                            'select'=>'*',
                            'condition'=>'user_id='.Yii::app()->user->user_id,
                            'limit'=>100
                            //'params'=>array(':userId'=>Yii::app()->user->user_id)
                        ));
                        
                        echo count($projects);
                    }
                    
                    
                    
                        
                ?>
            </div>
	</div><!-- mainmenu -->
        
        <style>
            #myHome{left:0px;width:46px;height: 44px}
            #myHome{background: url('/beavers/images/img_home.gif') 1px 0;}
            #myHome{position: relative; top:-20px;left: 1000px;}
     
            
        </style>
            

	<?php echo $content; ?>
        
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
