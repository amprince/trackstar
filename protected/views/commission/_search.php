<?php
/* @var $this CommissionController */
/* @var $model Commission */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'merchant_id'); ?>
		<?php echo $form->textField($model,'merchant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'affiliate_id'); ?>
		<?php echo $form->textField($model,'affiliate_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_of_report'); ?>
		<?php echo $form->textField($model,'date_of_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commission'); ?>
		<?php echo $form->textField($model,'commission'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_clicks'); ?>
		<?php echo $form->textField($model,'no_of_clicks'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'no_of_sales'); ?>
		<?php echo $form->textField($model,'no_of_sales'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_on'); ?>
		<?php echo $form->textField($model,'added_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->