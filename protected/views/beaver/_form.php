<?php
/* @var $this BeaverController */
/* @var $model Beaver */
/* @var $form CActiveForm */
?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'beaver-form',
	'enableAjaxValidation'=>true,
        //'focus'=>array($userForm,'username'),
)); ?>
    <div id="rightcolumn">
            right column
        </div>
    <div class="steps" id="leftcolumn">
        
        <?php //echo $form->errorSummary(array($model,$project,$userForm,$profile)); ?>
        
        <div class="step" id="project">
            <?php echo $this->renderPartial('/project/_form',array('model'=>$project,'form'=>$form)); ?>
        </div>
        
        <div class="step" id="user">
            <div id="fb-user">
                <fb:login-button show-faces=true size="xlarge" scope="email">Login With Facebook</fb:login-button>
                <?php echo CHtml::hiddenField('fbData'); ?>
            </div>
            <div id="non-fb-user">
                <?php echo $this->renderPartial('user.views.registration.registration',array('form'=>$form,'userForm'=>$userForm,'profile'=>$profile)); ?>    
            </div>
            
            <div id="confirm">
                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
            </div>
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
    #leftcolumn { float: left}
    #rightcolumn { float: right;display: none;}
    
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
        
        
        /*
         * sign in by 3 steps
         */
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

    //facebook
    window.fbAsyncInit = function() {
        FB.init({
          appId      : '485995968109492', // App ID
          channelUrl : '//localhost/beavers/channel.html', // Channel File
          status     : true, // check login status
          cookie     : true, // enable cookies to allow the server to access the session
          xfbml      : true  // parse XFBML
        });
    
        /*FB.login(function(response) {
            if (response.authResponse) {
                    FB.api('/me',function(apiRes){
                       $('#non-fb-user').hide();
                       
                       
                    });
                }
        });*/
        FB.Event.subscribe('auth.authResponseChange', function(response) {
            $('#non-fb-user').hide();
                FB.api('/me',function(apiRes){
                    json = JSON.stringify(apiRes);
                    $('#fbData').val(json);
                
                       
                });
            
        });
    }
    </script>