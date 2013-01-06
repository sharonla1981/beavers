<?php
/* @var $this BeaverController */
/* @var $model Beaver */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">

<?php 
$facebook = new Facebook(array(
  'appId'  => '133409120152484',
  'secret' => 'c1c201289cccf3f801618f592a864ca3',
));

?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beaver-form',
	'enableAjaxValidation'=>true,
        //'focus'=>array($userForm,'username'),
)); ?>
    <div class="steps">
        
        <?php //echo $form->errorSummary(array($model,$project,$userForm,$profile)); ?>
        
        <div class="step" id="project">
            <?php echo $this->renderPartial('/project/_form',array('model'=>$project,'form'=>$form)); ?>
        </div>
        
        <div class="step" id="user">
            <div>
            Login using OAuth 2.0 handled by the PHP SDK:
            <a href="<?php echo $facebook->getLoginUrl(); ?>">Login with Facebook</a>
            </div>
            <div id="face">
            <?php 
                    $fbUser = $facebook->getUser();
                    if ($fbUser)
                    {
                        $user_profile = $facebook->api('/me');
                        print_r($user_profile);
                    }
            ?>
            <img src="https://graph.facebook.com/<?php //echo $fbUser; ?>/picture">
            <?php             //print_r($user_profile); ?>
            </div>
                
            <?php /*if (!Yii::app()->user->isGuest): ?>
            <a href="<?php echo $this->createUrl('/user/auth/logout'); ?>" class="exit"><div></div>
               <span>Logout</span>
            </a>
            <?php else: ?>
            <fb:login-button perms="email,user_birthday,read_stream,publish_stream">
            <span>Login With Facebook</span>
            </fb:login-button>
            <div id="faceId"><?php $json = file_get_contents('https://graph.facebook.com/me'); 
                                    $detailObj = json_decode($json);
                                    var_dump($detailObj);
                ?>
            </div> 
            <?php endif; */ ?>
            <?php echo $this->renderPartial('user.views.registration.registration',array('form'=>$form,'userForm'=>$userForm,'profile'=>$profile)); ?>    
        </div>
        
        <div class="step" id="confirm">
            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
        </div>
        
    </div>
    <hr />
    <input type="button" value="Previous" id="previous" />
    <input type="button" value="Next" id="next" />
    
<?php /*
	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id'); ?>
		<?php echo $form->error($model,'project_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_user_id'); ?>
		<?php echo $form->textField($model,'create_user_id'); ?>
		<?php echo $form->error($model,'create_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_user_id'); ?>
		<?php echo $form->textField($model,'update_user_id'); ?>
		<?php echo $form->error($model,'update_user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'update_time'); ?>
		<?php echo $form->textField($model,'update_time'); ?>
		<?php echo $form->error($model,'update_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
        */?>
<?php $this->endWidget(); ?>

</div><!-- form -->
<style>
    .steps{
        position: relative;
        float: left;
    }
    .step{
        display: none;
    }
    /*input[type="button"]{
        display: none;
    }*/
</style>
<script>
    $(function() {
        steps = $('.step');
        first = steps.first();
        last = steps.last();
        first.show();
        var current = first;
        
        $('#previous').hide();
        
        $('#next').click(function(){
           if (validate())
               {
                   step('next');
               }
        
        });
        
        $('#previous').click(function(){
           if (validate())
               {
                   step('prev');
               }
           
        });
        
        function step(direction)
        {
            /*$.each($('div.step'),function(){
                $(this).hide();               
            });*/
            
            switch(direction){
                case 'next':
                    current.hide();
                    current = current.next('div.step');
                    current.show();
                    if (current.get(0) === last.get(0))
                     {
                         $('#next').hide();
                         $('#previous').show();
                     }
                     else 
                     {
                         $('#next').show();
                         $('#previous').show();
                     }
                     break;
                case 'prev':
                    current.hide();
                    current = current.prev('div.step');
                    current.show();
                    if (current.get(0) === first.get(0))
                    {
                        $('#next').show();
                        $('#previous').hide();
                    }
                    else 
                    {
                        $('#next').show();
                        $('#previous').show();
                    }
                     break;
            }
            
        }
        
        function validate()
        {
            var result = true;
            if (current.find('div').hasClass('error'))
                {
                    result = false;
                }
            return result;
        }
        
        
    });
    </script>