<?php
/* @var $this AffiliateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Affiliates',
);

$this->menu=array(
	array('label'=>'Create Affiliate', 'url'=>array('create')),
	array('label'=>'Manage Affiliate', 'url'=>array('admin')),
);
?>

<h1>Affiliates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
