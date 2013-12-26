<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<script>
$(function() {
    $( "#datepicker" ).datepicker();
    $( "#datepicker" ).datepicker('setDate', new Date());
  });
  </script>
  <?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commission-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<div class="col-md-12">
		<?php echo $form->error($model,'date_of_report',array('class'=>'alert alert-danger',)); ?>
		<?php echo $form->error($model,'no_of_clicks',array('class'=>'alert alert-danger',)); ?>

		<?php echo $form->error($model,'no_of_sales',array('class'=>'alert alert-danger',)); ?>
		<?php echo $form->error($model,'commission',array('class'=>'alert alert-danger',)); ?>

</div>
<div class="col-md-12">
<?php if(isset($message)) {
	echo '<div class="alert alert-warning alert-dismissable">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <strong>' . $message . '</strong></div>' ;

}?>

	<div class ="col-md-2">
		<?php 
			$mer = array();
			foreach($merchant as $i) {
				$mer[$i->id] = $i->merchant_name;
			}
		?>
		<?php echo $form->dropDownList($model,'merchant_id', $mer ,array('class'=>'form-control',)); ?>
	</div>
	
	<div class ="col-md-2">
		<?php 
			$aff = array();
			foreach($affiliate as $i) {
				$aff[$i->id] = $i->affiliate_name;
			}
		?>
		<?php echo $form->dropDownList($model,'affiliate_id',$aff,array('class'=>'form-control',)); ?>
	</div>
	
	<div class ="col-md-2">
		<?php echo $form->textField($model,'date_of_report',array('class'=>'form-control','placeholder'=>'Enter Date of Report','id'=>'datepicker',)); ?>
	</div>
	
	<div class ="col-md-1">
		<?php echo $form->textField($model,'no_of_clicks',array('class'=>'form-control','placeholder'=>'Clicks','id'=>'',)); ?>
	</div>
	
	<div class ="col-md-1">
		<?php echo $form->textField($model,'no_of_sales',array('class'=>'form-control','placeholder'=>'Sales','id'=>'',)); ?>
	</div>
	
	<div class ="col-md-2">
		<?php echo $form->textField($model,'commission',array('class'=>'form-control','placeholder'=>'Commission','id'=>'',)); ?>
	</div>
	
	<div class ="col-md-2">
		<?php echo CHtml::submitButton('Save Transaction',array('class'=>'btn btn-default',)); ?>
	</div>
 <?php $this->endWidget(); ?>
</div>
<br><br>

 <div class="col-md-8 col-md-offset-2 ">
 <table class="table table-striped">
 
 <tr><th>Merchant Name</th><th>Affiliate Name</th><th>Date of Transaction</th><th>No of Clicks</th><th>No of Sales</th><th>Commission</th></tr>
<?php 
	foreach($present as $item) {
		echo '<tr><td>' . $item->merchant->merchant_name . '</td><td>' . $item->affiliate->affiliate_name . '</td><td>' . $item->date_of_report . '</td><td>'  . $item->no_of_clicks . '</td><td>' . $item->no_of_sales . '</td><td>' . $item->commission . '</td></tr>' ;
	}
?>
</table> 
 </div>
