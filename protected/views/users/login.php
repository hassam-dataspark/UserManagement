<?php
/* @var $this UsersController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="row-fluid">
<h1>Login</h1>

<p>Please fill out the following form with your login credentials:</p>
</div>
<div class="row-fluid" >
    <div class="form">
            <?php $form=$this->beginWidget('CActiveForm', array(
            	'id'=>'login-form',
        	'enableClientValidation'=>true,
                 'clientOptions'=>array(
                    'validateOnSubmit'=>true,
                    ),
        )); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row-fluid">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	<div class="row-fluid rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row-fluid buttons">
		<?php //echo CHtml::submitButton('Login'); ?>
            <?php 
                    $this->widget('bootstrap.widgets.TbButton',array(
                    	'label' => 'Login',
                	'type' => 'primary',
                	'size' => 'small',
                        'buttonType' => 'submit'
                ));
                $this->endWidget(); ?>        
	</div>
       



</div><!-- form -->
</div>