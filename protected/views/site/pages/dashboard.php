
            <div class="row-fluid" >
                
                
                  <div id="dashboard-pane">
            <?php for ($i = 0; $i < $num_modules; $i++)
            {  ?>
                <div class="row-fluid" >
                   <?php                
                            $charts = $modules[$i]->insightCharts;
                            foreach($charts as $chart)
                            {
                                echo $chart->chart_name;
                                ?>
                         <div class="<?php echo 'span'.$modules[$i]->columns;?>" id="<?php echo $chart->chart_src; ?>" style="min-width: 400px; height: 400px;"></div>
                         <?php } ?>       
                 </div>
            <?php } ?>            
   
       
                      </div>
                     
                 </div>    
            
           

