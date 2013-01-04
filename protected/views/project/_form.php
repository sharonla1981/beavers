<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>
<?php Yii::app()->clientScript->registerScriptFile("https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"); ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<?php Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/login.css" rel="stylesheet">

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	'enableAjaxValidation'=>true,
)); ?>

	<!--<p class="note">Fields with <span class="required">*</span> are required.</p> -->

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php //echo $form->labelEx($model,'descr'); ?>
		<?php echo $form->textField($model,'descr',array('size'=>60,'maxlength'=>200,'placeholder'=>$model->getAttributeLabel('descr'))); ?>
		<?php echo $form->error($model,'descr'); ?>
	</div>
	<div class="row" id="typesTextBox">
		<?php /*echo $form->labelEx($model,'type_id'); ?>
                <?php //echo $form->dropDownList($model,'type_id',CHtml::listData(Type::model()->findAll(),'type_id','descr'), array('empty'=>'Project Type'));  */?>
                <?php //echo CHtml::textField('typeText','',array('placeholder'=>$model->getAttributeLabel('type_id'),'readonly'=>'readonly')); ?>
		<?php echo $form->hiddenField($model,'type_id'); ?>
                <div id="typesDiv">
                <?php 
                    $list = CHtml::listData(Type::model()->findAll(),'type_id','descr');
                    echo CHtml::openTag('ul',array('id'=>'typeList'));
                    foreach ($list as $key => $type)
                    {
                        echo CHtml::openTag('li',array('id'=>$key)).$type;
                        echo CHtml::closeTag('li');
                    }
                    echo CHtml::closeTag('ul');
                        ?>

                </div>
		<?php echo $form->error($model,'type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->textField($model,'address',array('size'=>50,'maxlength'=>50,'placeholder'=>$model->getAttributeLabel('address'))); ?>
                <?php echo $form->hiddenField($model,'location_lat'); ?>
                <?php echo $form->hiddenField($model,'location_lon'); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'currency_id'); ?>
                <?php //echo CHtml::textField('currencyText','',array('placeholder'=>$model->getAttributeLabel('currency_id'),'readonly'=>'readonly')); ?>
		<?php echo $form->hiddenField($model,'currency_id'); ?>
		<?php echo $form->error($model,'currency_id'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'planned'); ?>
		<?php echo $form->textField($model,'planned',array('placeholder'=>$model->getAttributeLabel('planned'))); ?>
		<?php echo $form->error($model,'planned'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'uom_id'); ?>
		<?php echo $form->textField($model,'uom_id',array('placeholder'=>$model->getAttributeLabel('uom_id'))); ?>
		<?php echo $form->error($model,'uom_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>
     <br /><br /><br /><br /><br /><br /><br /><br />
    

<?php $this->endWidget(); ?>
</div><!-- form -->
<div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Account</a>
                        </li>
                        <li>
                            <a href="#">Personal Details</a>
                        </li>
                        <li>
                            <a href="#">Payment</a>
                        </li>
                        <li>
                            <a href="#">Settings</a>
                        </li>
						<li>
                            <a href="#">Confirm</a>
                        </li>
                    </ul>
                </div>
<!-- style -->
<style>
    #typeList li {
        
        -webkit-border-radius: 3px;
	-moz-border-radius: 3px;
	-ms-border-radius: 3px;
	-o-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-moz-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-ms-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-o-box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	box-shadow: 0 1px 0 #fff, 0 -2px 5px rgba(0,0,0,0.08) inset;
	-webkit-transition: all 0.5s ease;
	-moz-transition: all 0.5s ease;
	-ms-transition: all 0.5s ease;
	-o-transition: all 0.5s ease;
	transition: all 0.5s ease;
        background: #fff url('/beavers/images/Small-Grey-Icons1.gif') -7px 0px no-repeat;
        /*background-size: 20px 20px;*/
	border: 1px solid #c8c8c8;	
	font: 13px Helvetica, Arial, sans-serif;
	margin: 0px 0 0px;
	padding: 15px 10px 15px 50px;
	/*width: 80%;*/
        margin: 10px;
        list-style-type: none;
        float: left;
    }
    
    #typeList li:hover {
        background: /*#eae7e7*/ #F39814 url('/beavers/images/Small-Grey-Icons1.gif') -7px 0px no-repeat;
    }
    
    #typeList .ui-selected {background: #F39814 url('/beavers/images/Small-Grey-Icons1.gif') -7px 0px no-repeat;}
    #typesDiv { 
                margin: -25px 0px 0px 5px;
                /*z-index: 1;
                position: absolute;*/
                /*width: 300px;*/
    }
    /*input {
             background: #eae7e7 url(/images/icons.png) 0 -50px no-repeat;
         }*/
</style>
<!-- script -->
 <script>
     /**
      * create a google places address selection
      */
     
function initialize() {
     var input = document.getElementById('Project_address');
		/*var options = {
		  types: ['(cities)'],
		  componentRestrictions: {country: 'IL'}
		};*/
     var searchBox = new google.maps.places.SearchBox(input);
		
     google.maps.event.addListener(searchBox, 'places_changed', function() {
        var places = searchBox.getPlaces();
          
		  
        lat = places[0].geometry.location.Za;
        lon = places[0].geometry.location.$a;
        $('#Project_location_lat').val(lat);
        $('#Project_location_lon').val(lon);
        //get the country code
        address = $('#Project_address').val();
        $.ajax({
            url: 'http://maps.googleapis.com/maps/api/geocode/json',
            data: {
                sensor: false,
                address: address
            },
            //dataType:'jsonp',
            success: function (data) {
                country_code = data.results[0].address_components[2].short_name;
                $.ajax({
                            //get the attributes labels ajaxly
                            url: "/beavers/index.php/project/getCurrencyIdByCountryCode",
                            type: "POST",
                            async: "false",
                            dataType: "JSON",
                            data: 'country_code=' + country_code,                            
                            success: function(data){
                               //set the currency's form fields with the data
                               $('#Project_currency_id').val(data.currency_id);
                               //$('#currencyText').val(data.curreny_code + " - " + data.currency_name);

                            }
                            });
            },
            error: function(data){
                    alert(data);
                }
            });
    });
}
	  
      google.maps.event.addDomListener(window, 'load', initialize);
/************************************************************************************/

$(document).ready(function() {
    
    
    $('#typeList').selectable({
        selected: function (event, ui) {
           selectedID = $(this).find('.ui-selected').attr('id');
           selectedName = $(this).find('.ui-selected').text();
            $('#Project_type_id').val(selectedID);
            $('#typeText').val(selectedName);
            //$('#typesDiv').hide();

        }
    });
    
    //dropdown list like div
    /*$('#typesTextBox').live('mouseover',function(){
        $('#typesDiv').show();
    });

        $('#typesTextBox').live('mouseout',function(){
        $('#typesDiv').hide();
    });*/
    /****************************************************************/
    //address field
    $('#Project_address').focus(function(){
       $(this).attr('placeholder','Start typing...');
    });
    
    $('#Project_address').blur(function(){
       $(this).attr('placeholder','Address');
    });
    /***************************************************************/
    $('#')
});
</script>