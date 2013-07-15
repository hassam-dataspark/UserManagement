<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/header'); ?>
<?php $this->endContent(); 
$this->beginContent('//layouts/navbar');$this->endContent(); 

?>
<div class="container-fluid" >
<div class="row-fluid">
    
        <div class="span9" id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    
        
             <div class="span3" id="sidebar">
            <?php
                  /* $this->beginWidget('zii.widgets.CPortlet', array(
                       'title'=>'Operations',
                 ));
                 $this->widget('bootstrap.widgets.TbMenu', array(
                        'items'=>$this->menu,
                       'htmlOptions'=>array('class'=>'operations'),
                    ));
                 $this->endWidget(); */
             ?>
              </div><!-- sidebar -->
         
</div>
  

</div>

<?php $this->beginContent('//layouts/footer'); 
    $this->endContent();
?>