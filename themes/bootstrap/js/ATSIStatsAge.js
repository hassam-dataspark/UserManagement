 $(function () {
 $('#atsi-by-age-div').highcharts({
       chart: {
           plotBackgroundColor: null,
           plotBorderWidth: null,
           plotShadow: false
       },
       title: {
           text: 'ATSI Statistics by Age'
       },
       tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>',
            percentageDecimals: 1
       },
       plotOptions :{
           pie: {
               allowPointSelect: true,
               cursor: 'pointer',
               dataLabels: {
                   enabled: true,
                   color: '#000000',
                   connectorColor: '#000000',
                    format: '{point.name} :<b>{point.percentage:.2f} %</b>'
               }
           }
       },
       series :[{
               type: 'pie',
               name: 'ATSI by Age',
               data: [
                  ['&lt; 20',2755.67],
                  ['&lt; 25',618.04],
                  ['&lt; 30',1798.88],
                  {
                    name: '&lt; 35',
                    y: 2526.53,
                    sliced: true,
                    selected: true
                  },
                  ['&lt; 40',2623.43],
                  ['&lt; 45',2837.69],
                  ['&lt; 50',2964.59],
                  ['&lt; 55',2728.10],
                  ['&lt; 60',2058.04],
                  ['&lt; 65',1128.24],
                  ['&lt; 70',273.13],
                  ['&lt; 75',23.8]
               ]
       }]
   });
   
      });