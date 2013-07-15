<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<?php //$this->widget('bootstrap.widgets.TbNavbar',array(
//    'type'=>'inverse',
//    'brand' => 'DataSpark Analytics',
//    'items'=>array(
//        array(
//            'class'=>'bootstrap.widgets.TbMenu',
//            'items'=>array(
//                array('label'=>'Home', 'url'=>array('/site/login')),
//                array('label'=>'User', 'url'=>'#', 'items'=>array(
//                    array('label'=>'List Users', 'url'=>'?r=users/index'),
//                    array('label'=>'Create User', 'url'=>'?r=users/create'),
//                   
//                )),
//                array('label'=>'Login', 'url'=>array('/users/login'), 'visible'=>Yii::app()->user->isGuest),
//                array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//            ),
//        ),
//    ),
//)); ?>
          <div class="navbar navbar-inverse">
		<div class="navbar-inner">
                    <a class="brand" href="http://dashboard.dataspark.com.au"><img src="images/dataspark_logo.png" /></a>
			<ul class="nav pull-right">
				<li class="active"><a href="#">
                                        <i class="icon-envelope"></i>
                                    </a></li>
				<li><a href="#"><i class="icon-warning-sign icon-white"></i></a></li>
                                 <li class="dropdown">
                                         <a class="dropdown-toggle"  data-toggle="dropdown" href="#">
                                             <i class="icon-user icon-white" ></i>
                                              <?php $user = Yii::app()->user;
                                                     echo $user->name; ?>
                                                 <b class="caret"></b>
                                         </a>
                                 <ul class="dropdown-menu">
                                     <li><a href="#">Profile</a></li>
                                     <li><a href="?r=site/logout">Log Out</a></li>
                                 </ul>
			</ul>
		</div>
	</div>