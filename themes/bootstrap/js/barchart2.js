  $(function() {   
     $('#professional-by-age').highcharts({
       chart: {
           type: 'column'
       },
       title: {
           text: 'Academic by Age, Group and Classification'
       },
      legend: {
          align:'right',
          layout:'vertical'
      },
       plotOptions: {
           series : {
               stacking : 'normal'
           }
       },
       xAxis: {
           categories: ["<20","<30","<40","<50","<60","<70","<80"],
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
           name: 'HEO 10',
           data: [0,4,22.2,47.7,27.75,4]
       },
       {
            name: 'HEO 09',
           data: [0,4,32.8,44.9,14.1,0]
       },
       {
           name: 'HEO 08',
           data:[0,30.24,61.5,49.24,16.84,1]
       },
       {
           name: 'HEO 07',
           data: [16.7,75.89,59.71,34.90,7.7,0]
       },
       {
               name: 'HEO 06',
               data: [29.62,77.58,22.90,17.9,2.65,0]
       },
       {
               name: 'HEO 05',
               data: [29.62,77.58,22.90,17.9,2.65,0]
       },
       {
               name: 'HEO 04',
               data: [0,44.6,37.84,41.38,27.88,6.6,0]
       },
       {
               name: 'HEO 03',
               data: [1.5,28.14,13.16,24.24,18.58,2.2,0]
       },
       {
               name: 'HEO 02',
               data: [1,6.92,1.62,10.5,3.38,0.65,0]
       },
       {
               name: 'HEO 01',
               data: [0,0,0.82,0,0,0.65,0]
       },
        {
               name: 'Above 10',
               data: [0,0,2.6,10.6,10,3.6,0]
       }
        ]
   });
  });
