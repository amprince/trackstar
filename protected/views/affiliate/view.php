<?php
/* @var $this AffiliateController */
/* @var $model Affiliate */

$this->breadcrumbs=array(
	'Affiliates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Affiliate', 'url'=>array('index')),
	array('label'=>'Create Affiliate', 'url'=>array('create')),
	array('label'=>'Update Affiliate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Affiliate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Affiliate', 'url'=>array('admin')),
);
?>

<h1>View Affiliate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'affiliate_name',
		'added_on',
		'user_id',
	),
)); ?>
