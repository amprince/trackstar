<?php
/* @var $this AffiliateController */
/* @var $model Affiliate */

$this->breadcrumbs=array(
	'Affiliates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Affiliate', 'url'=>array('index')),
	array('label'=>'Create Affiliate', 'url'=>array('create')),
	array('label'=>'View Affiliate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Affiliate', 'url'=>array('admin')),
);
?>

<h1>Update Affiliate <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>