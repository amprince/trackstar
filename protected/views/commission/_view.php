<?php
/* @var $this CommissionController */
/* @var $data Commission */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_id')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('affiliate_id')); ?>:</b>
	<?php echo CHtml::encode($data->affiliate_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_report')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_report); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commission')); ?>:</b>
	<?php echo CHtml::encode($data->commission); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_clicks')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_clicks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('no_of_sales')); ?>:</b>
	<?php echo CHtml::encode($data->no_of_sales); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_on')); ?>:</b>
	<?php echo CHtml::encode($data->added_on); ?>
	<br />

	*/ ?>

</div>