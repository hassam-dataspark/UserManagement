<div class="btn-toolbar">
    <?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'primary', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'size'=>'large',
        'buttons'=>array(
            array('label'=>'Select a Task', 'items'=>array(
                array('label'=>'List Users', 'url'=>'?r=users/index'),
                array('label'=>'Create User', 'url'=>'?r=users/create'),
        ),
      ),
    ))); 
    ?>
</div>