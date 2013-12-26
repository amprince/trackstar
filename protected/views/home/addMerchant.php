<div class="col-md-4 "></div>
<div class="col-md-4 ">
<div class="form">
<?php if(isset($message)) {
	echo '<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>' . $message . '</strong></div>' ;

}?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'merchant-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
  <div class="form-group">
	<?php echo $form->labelEx($model,'merchant_name'); ?>
	<?php echo $form->textField($model,'merchant_name',array('class'=>'form-control','placeholder'=>'Enter merchant Name',)); ?>
	<?php echo $form->error($model,'merchant_name',array('class'=>'alert alert-danger',)); ?>
  </div>
 
 <div class="form-group buttons">
		<?php echo CHtml::submitButton('Save',array('class'=>'btn btn-default',)); ?>
	</div>

 <?php $this->endWidget(); ?>
 </div></div>
<br/><br />

 <div class="col-md-6 col-md-offset-3 ">
 <table class="table table-striped">
 
 <tr><th>Merchant Name</th><th>Added On</th><th>Added By</th></tr>
<?php 
	foreach($presentMerchant as $item) {
		echo '<tr><td>' . $item->merchant_name . '</td><td>' . $item->added_on . '</td><td>' . $item->user->username . '</td></tr>' ;
	}
?>
</table> 
 </div>