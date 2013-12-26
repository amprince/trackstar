<?php
/* @var $this AffiliateController */
/* @var $model Affiliate */

$this->breadcrumbs=array(
	'Affiliates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Affiliate', 'url'=>array('index')),
	array('label'=>'Manage Affiliate', 'url'=>array('admin')),
);
?>

<h1>Create Affiliate</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>