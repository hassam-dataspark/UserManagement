<?php
$this->breadcrumbs=array(
	'List',
);

$this->menu=array(
	array('label'=>'Create Users','url'=>array('create')),
	array('label'=>'Manage Users','url'=>array('admin')),
);
?>

<h1>List of Users</h1>


<?php
$this->widget('bootstrap.widgets.TbGridView', array(
	'type'=>'bordered',
	'dataProvider'=>$dataProvider,
	'template'=>'{items}',
	'columns'=>$gridColumns,
       
));

?>
