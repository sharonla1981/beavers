<?php
$this->title = Yum::t('All Profile visits in the system');

$this->breadcrumbs = array(
	Yum::t('Profiles') => array('index'),
	Yum::t('Profile visits'));

$this->widget('zii.widgets.grid.CGridView', array(
			'dataProvider'=>$model->search(),
			'columns'=>array(
				array(
					'header' => Yum::t('Visitor'),
					'type' => 'raw',
					'value' => 'CHtml::link($data->visitor->username, array(
							"/user/profile/view",
							"id" => $data->visitor->profile->profile_id))'),
				array(
					'header' => Yum::t('Visited'),
					'type' => 'raw',
					'value' => 'CHtml::link($data->visited->username, array(
							"/user/profile/view",
							"id" => $data->visited->profile->profile_id))'),
				array(
					'name' => 'timestamp_first_visit',
					'filter' => false,
					'value'=>'date(Yii::app()->getModule("user")->dateTimeFormat,
						$data->timestamp_first_visit)',
					),
				array(
					'name'=>'timestamp_last_visit',
					'filter' => false,
					'value'=>'date(Yii::app()->getModule("user")->dateTimeFormat,
						$data->timestamp_last_visit)',
					),
				'num_of_visits',
				))); ?>
