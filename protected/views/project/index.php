<?php
/* @var $this ProjectController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Projects',
);

$this->menu=array(
	array('label'=>'Create Project', 'url'=>array('create')),
	array('label'=>'Manage Project', 'url'=>array('admin')),
);
?>

<h1>Projects</h1>

<?php
    /*foreach($model->bevers->beaver_id as $beaverId) 
    $beaverId[]=$beaverId->beaver_id; */
?> 

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'dataProvider'=>$dataProvider,
        'columns'=>array(
            'descr',
            //'currency.name',
            array(
                'name'=>'user',
                'value'=>  function($data) {
                    $beaverId = array();
                    foreach ($data->beavers as $beaver)
                    {
                        $beaverId[] = $beaver->user_id;
                    }
                    return implode(', ', $beaverId);
                }
                
            ),
            //'beavers.user_id'
        )
	//'itemView'=>'_view',
)); ?>
