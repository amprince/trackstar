<?php
/* @var $this MerchantController */
/* @var $model Merchant */

$this->breadcrumbs=array(
	'Merchants'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Merchant', 'url'=>array('index')),
	array('label'=>'Create Merchant', 'url'=>array('create')),
	array('label'=>'Update Merchant', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Merchant', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Merchant', 'url'=>array('admin')),
);
?>

<h1>View Merchant #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'merchant_name',
		'added_on',
		'user_id',
	),
)); ?>
