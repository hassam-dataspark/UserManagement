<?php /* @var $this Controller */ ?>

<?php $this->beginContent('//layouts/main'); ?>
<div class="row-fluid" >
<div class="span12" >
	<div class="span8" id="main-content">
		<?php echo $content; ?>
	</div><!-- content -->

    <div class="span4">
	<div id="sidebar">
	<?php
		$this->beginWidget('zii.widgets.CPortlet', array(
			'title'=>'Operations',
		));
		$this->widget('zii.widgets.CMenu', array(
			'items'=>$this->menu,
			'htmlOptions'=>array('class'=>'operations'),
		));
		$this->endWidget();
	?>
	</div><!-- sidebar -->
    </div>
</div>
</div>
<?php $this->endContent(); ?>