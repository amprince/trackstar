<?php
/* @var $this CommissionController */
/* @var $model Commission */

$this->breadcrumbs=array(
	'Commissions'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Commission', 'url'=>array('index')),
	array('label'=>'Create Commission', 'url'=>array('create')),
	array('label'=>'Update Commission', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Commission', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Commission', 'url'=>array('admin')),
);
?>

<h1>View Commission #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'merchant_id',
		'affiliate_id',
		'date_of_report',
		'commission',
		'no_of_clicks',
		'no_of_sales',
		'user_id',
		'added_on',
	),
)); ?>
