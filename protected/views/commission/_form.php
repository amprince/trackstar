<?php
/* @var $this CommissionController */
/* @var $model Commission */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commission-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'merchant_id'); ?>
		<?php echo $form->textField($model,'merchant_id'); ?>
		<?php echo $form->error($model,'merchant_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'affiliate_id'); ?>
		<?php echo $form->textField($model,'affiliate_id'); ?>
		<?php echo $form->error($model,'affiliate_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_report'); ?>
		<?php echo $form->textField($model,'date_of_report'); ?>
		<?php echo $form->error($model,'date_of_report'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commission'); ?>
		<?php echo $form->textField($model,'commission'); ?>
		<?php echo $form->error($model,'commission'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_clicks'); ?>
		<?php echo $form->textField($model,'no_of_clicks'); ?>
		<?php echo $form->error($model,'no_of_clicks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'no_of_sales'); ?>
		<?php echo $form->textField($model,'no_of_sales'); ?>
		<?php echo $form->error($model,'no_of_sales'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id'); ?>
		<?php echo $form->error($model,'user_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_on'); ?>
		<?php echo $form->textField($model,'added_on'); ?>
		<?php echo $form->error($model,'added_on'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->