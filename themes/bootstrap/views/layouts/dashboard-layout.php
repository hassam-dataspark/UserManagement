<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    
<?php

$this->beginContent('//layouts/header');
    $this->endContent();
    $this->beginContent('//layouts/navbar');$this->endContent(); 
    ?>
</head>

<body>

<div class="container-fluid" >
<div class="row-fluid">
    <div id="sidebar-left" class="span1">
                    <div class="tabbable tabs-left" >
                        <ul class="nav nav-tabs nav-stacked " >
                            <li>
                                <a class="dropmenu" href="#demo" data-toggle="collapse"  ><i class="icon-tasks"></i> <span class="hidden-tablet">Dashboard</span></a>
                                <ul id="demo" class="collapse" >
                                    <li><a class="submenu" href="?r=site/dashboard/grid_id/1"><span class="hidden-tablet"> Dashboard 1</span></a></li>
				    <li><a class="submenu" href="?r=site/dashboard/grid_id/2"><span class="hidden-tablet">Dashboard 2</span></a></li>
				    <li><a class="submenu" href="submenu3.html"><span class="hidden-tablet">Dashboard 3</span></a></li>
                                </ul>
                            </li>
                            <li><a href="messages-pane" data-toggle="tab" >
                                   <i class="icon-tasks"></i> 
                                    Messages</a></li>
                             <li><a href="tasks-pane" data-toggle="tab" ><i class="icon-tasks"></i> Tasks</a></li>
                              <li><a href="widgets-pane" data-toggle="tab" ><i class="icon-tasks"></i> Widgets</a></li>
                               <li><a href="tables-pane" data-toggle="tab" ><i class="icon-tasks"></i> Tables</a></li>
                               
                        </ul>
                    </div>
                    
                </div>
        <div class="span11" id="content">
            <?php echo $content; ?>
        </div><!-- content -->
    
         
</div>

</div>
  
<?php $this->beginContent('//layouts/footer'); 
    $this->endContent();
?>
</body>
</html>

