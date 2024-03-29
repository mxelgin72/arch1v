<?php
$this->breadcrumbs=array(
	Yii::t('core','Journal')=>array('journal/index'),
	Yii::t('core','Weeknum')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Weeknum', 'url'=>array('index')),
	array('label'=>'Create Weeknum', 'url'=>array('create')),
	array('label'=>'Update Weeknum', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Weeknum', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Weeknum', 'url'=>array('admin')),
);
?>

<h1>View Weeknum #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
//		'id:text:Country Code',
		'id',
		'weeknum',
		'year',
//		'openweekdate',
			array(
					'label'=>'Дата открытия недели',
					'type'=>'raw',
					'value'=>date('d-m-Y',strtotime($model->openweekdate)),
			),
			array(
					'label'=>'Дата закрытия недели',
					'type'=>'raw',
					'value'=>date('d-m-Y',strtotime($model->closeweekdate)),
			),
//		'closeweekdate',
//		'userid',
 			array(
 					'label'=>'Менеджер недели',
 					'type'=>'raw',
 					'value'=> VUsers::model()->findByAttributes(array('id'=>$model->userid))->fullname,
 					),
	),
)); ?>