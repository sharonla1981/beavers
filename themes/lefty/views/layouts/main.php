<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:fb="http://ogp.me/ns/fb#">
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
<div id="fb-root"></div>
<script>
  // Additional JS functions here
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '485995968109492', // App ID
      channelUrl : '//localhost/beavers/channel.html', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    FB.getLoginStatus(function(response) {
        if (response.status === 'connected') {
          testAPI();
        } else if (response.status === 'not_authorized') {
          //login();
        } else {
          //login();
        }
    });

    function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
        //alert('Good to see you, ' + response.name + '.');
    });
    }   
  };
  
  function login() {
    FB.login(function(response) {
        if (response.authResponse) {
            testAPI();
        } else {
            // cancelled
        }
    });
}

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     d.getElementsByTagName('head')[0].appendChild(js);
   }(document));
  /*(function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));*/
</script>
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
</html>

