<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>    <script type="text/javascript" href="<?php echo Yii::app()->theme->baseUrl; ?>/js/users.js" ></script>
  
 <?php $baseUrl = Yii::app()->theme->baseUrl; 
  $cs = Yii::app()->getClientScript();
  $cs->registerScriptFile('http://code.highcharts.com/highcharts.js');
  $cs->registerScriptFile($baseUrl.'/js/chart.js');
  $cs->registerScriptFile($baseUrl.'/js/ATSIStatsAge.js');
  $cs->registerScriptFile($baseUrl.'/js/ATSIStatsGender.js'); 
$cs->registerScriptFile($baseUrl.'/js/barchart1.js'); 
$cs->registerScriptFile($baseUrl.'/js/profession.js'); 
$cs->registerScriptFile($baseUrl.'/js/barchart2.js'); ?>
	<div id="footer" class="offset6">
		Copyright &copy; <?php echo date('Y'); ?> by DataSpark Analytics<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->