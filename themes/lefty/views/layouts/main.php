<?php 
    /*$fbconfig = Yum::module()->facebookConfig;
    if(isset($fbconfig)) {
        Yii::import('application.modules.user.vendors.facebook.*');
        require_once('Facebook.php');
        $facebook = new Facebook($fbconfig);
        $fb_session = $facebook->getSession();
        if($fb_session && Yii::app()->user->isGuest)
                    if($this->action->id != 'login')
                        $this->redirect($this->createUrl('/user/auth/login'));
}*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:fb="http://www.facebook.com/2008/fbml">
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
                                array('label'=>'Beaver','url'=>array('/Beaver/create')),
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
                <?php 
                $beaver;
                if(isset(Yii::app()->user->beaver_id)) 
                    {
                        $beaver = Beaver::model()->findByPk(Yii::app()->user->beaver_id);
                        //echo Yii::app()->user->project_id; 
                        $project = $beaver->getRelated('project');
                        
                        echo 'Project: '.$project->descr;
                        echo '<br />';
                        echo 'Location: '.$project->address;
                        
                    }
                    elseif (isset(Yii::app()->user->user_id))
                    {
                        
                        //$project = Beaver::model()->findByPk(Yii::app()->user->beaver_id);
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
            #myHome{left:0px;width:300px;height: 44px;text-align: left}
            /*#myHome{background: url('/beavers/images/img_home.gif') 1px 0;}*/
            #myHome{position: relative; top:-20px;left: 850px;}
     
            
        </style>
            

	<?php echo $content; ?>
        
	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
<?php /*if(isset($fbconfig)): ?>
<div id="fb-root"></div>
<script>
window.fbAsyncInit = function() {
    FB.init({
        appId   : '<?php echo $facebook->getAppId(); ?>',
        session : <?php echo json_encode($fb_session); ?>, // don't refetch the session when PHP already has it
        status  : <?php echo $fbconfig['status']; ?>, // check login status
        cookie  : <?php echo $fbconfig['cookie']; ?>, // enable cookies to allow the server to access the session
        xfbml   : <?php echo $fbconfig['xfbml']; ?> // parse XFBML
    });

    // whenever the user logs in, we refresh the page
    FB.Event.subscribe('auth.login', function() {
        window.location.reload();
    });
};

(function() {
    var e = document.createElement('script');
    e.src = document.location.protocol + '//connect.facebook.net/<?php echo $fbconfig['lang']; ?>/all.js';
    e.async = true;
    document.getElementById('fb-root').appendChild(e);
}());
</script>
<?php endif; */?>
</html>
