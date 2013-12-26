

<div class="col-md-4 "></div>
<div class="col-md-4 ">
<div class="form">
<?php if(isset($message)) {
	echo '<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>' . $message . '</strong></div>' ;

}?>
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
  <div class="form-group">
	<?php echo $form->labelEx($model,'fname'); ?>
	<?php echo $form->textField($model,'fname',array('class'=>'form-control','placeholder'=>'Enter First Name',)); ?>
	<?php echo $form->error($model,'fname',array('class'=>'alert alert-danger',)); ?>
  </div>
  <div class="form-group">
    <?php echo $form->labelEx($model,'lname'); ?>
	<?php echo $form->textField($model,'lname',array('class'=>'form-control','placeholder'=>'Enter Last Name',)); ?>
	<?php echo $form->error($model,'lname',array('class'=>'alert alert-danger',)); ?>
  </div>
  <div class="form-group">
    <?php echo $form->labelEx($model,'username'); ?>
	<?php echo $form->textField($model,'username',array('class'=>'form-control','placeholder'=>'Enter Email',)); ?>
	<?php echo $form->error($model,'username',array('class'=>'alert alert-danger',)); ?>
  </div>
  
  <div class="form-group">
    <?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->textField($model,'password',array('class'=>'form-control','placeholder'=>'Enter Password',)); ?>
	<?php echo $form->error($model,'password',array('class'=>'alert alert-danger',)); ?>
  </div>
  
<div class="form-group buttons">
		<?php echo CHtml::submitButton('Save',array('class'=>'btn btn-default',)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>