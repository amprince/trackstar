<?php
/* @var $this MerchantController */
/* @var $data Merchant */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('merchant_name')); ?>:</b>
	<?php echo CHtml::encode($data->merchant_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_on')); ?>:</b>
	<?php echo CHtml::encode($data->added_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>