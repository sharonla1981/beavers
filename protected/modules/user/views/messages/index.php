<?php
$this->title = Yum::t('My inbox');

$this->breadcrumbs=array(
		Yum::t('Messages')=>array('index'),
		Yum::t('My inbox'));

echo Yum::renderFlash();

$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'yum-messages-grid',
			'dataProvider' => $model->search(),
			'columns'=>array(
				array(
					'type' => 'raw',
					'name' => Yum::t('From'),
					'value' => 'CHtml::link($data->from_user->username, array(
							Yum::route(\'user/profile\'),
							"id" => $data->from_user_id)
						)'
					),
				array(
					'type' => 'raw',
					'name' => Yum::t('title'),
					'value' => 'CHtml::link($data->getTitle(), array("view", "id" => $data->id))',
					),
				array(
					'name' => 'timestamp',
					'value' => '$data->getDate()',
					),
				array(
					'class'=>'CButtonColumn',
					'template' => '{view}{delete}',
					),
				),
				)); ?>
