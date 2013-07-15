<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<?php $this->beginContent('//layouts/header');
    $this->endContent();
    ?>
</head>

<body>


<div class="container" id="page">
<?php $this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Insight Admin'
)); ?>
     <p>DataSpark provides cost effective and easy to use dashboards for inspirational business insight.</p>
    <p>
  <?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Learn more',
    )); ?></p>
<?php $this->endWidget(); ?>

	<?php echo $content; ?>

	<div class="clear"></div>


</div><!-- page -->

</body>
</html>
