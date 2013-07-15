 $(function () {
$('#atsi-by-gender-div').highcharts({
       chart: {
           plotBackgroundColor: null,
           plotBorderWidth: null,
           plotShadow: false
       },
       title: {
           text: 'ATSI Statistics by Gender'
       },
       tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>',
            percentageDecimals: 1
       },
       plotOptions :{
           pie: {
               allowPointSelect: true,
               cursor: 'pointer',
               showInLegend: true,
               colors: ['#FF33CC','#666666'],
               dataLabels: {
                   enabled: true,
                   color: 'black',
                   connectorColor: '#000000',
                    format: '{point.name} :<b>{point.percentage:.2f} %</b>'
               }
           }
       },
       series :[{
               type: 'pie',
               name: 'ATSI by Gender',
               data: [
                  ["F",11385.71],
                  ["M",11870.73]

               ]
       }]
   });
     $('#atsi-by-group-div').highcharts({
       chart: {
           plotBackgroundColor: null,
           plotBorderWidth: null,
           plotShadow: true
       },
       title: {
           text: 'ATSI Statistics by Group'
       },
       tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.2f}%</b>',
            percentageDecimals: 1
       },
       plotOptions :{
           pie: {
               allowPointSelect: true,
               cursor: 'pointer',
               showInLegend: true,
               dataLabels: {
                   enabled: true,
                   color: 'black',
                   connectorColor: 'blue',
                    format: '{point.name} :<b>{point.percentage:.2f} %</b>'
               }
           }
       },
       series :[{
               type: 'pie',
               name: 'ATSI by Gender',
               data: [
                    ["ATSI",607.15],
                    ["Aboriginal",104.04],
                    ["Not ATSI",19491.34],
                     ["TS Islander",1],
                      ["Unknown",3052.91]

               ]
       }]
   });
   
 });