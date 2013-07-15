$(function() {
   $('#academic-by-age').highcharts({
       chart: {
           type: 'column'
       },
       title: {
           text: 'Academic by Age, Group and Classification'
       },
       colors: ['pink','green','orange','red','blue'],
       plotOptions: {
           series : {
               stacking : 'normal'
           }
       },
       xAxis: {
           categories: ["<30","<40","<50","<60","<70","<80"],
           title : {
               text: 'Age Group'
           }
       },
       yAxis: {
           title: {
               text: 'FTE'
           }
       },
       credits: {
           text: "DataSpark",
           href: "http://www.dataspark.com.au"
       },
       series : [
      
       {
           name: 'Level E',
           data: [0,4,22.2,47.7,27.75,4]
       },
       {
            name: 'Level D',
           data: [0,4,32.8,44.9,14.1,0]
       },
       {
           name: 'Level C',
           data:[0,30.24,61.5,49.24,16.84,1]
       },
       {
           name: 'Level B',
           data: [16.7,75.89,59.71,34.90,7.7,0]
       },
       {
               name: 'Level A',
               data: [29.62,77.58,22.90,17.9,2.65,0]
       }
 
        ]
   });
});