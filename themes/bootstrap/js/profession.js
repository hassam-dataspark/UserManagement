/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


   // By Profession
   $(function() {
     $('#profession_ratio_div').highcharts({
       chart: {
           type: 'column'
       },
       title: {
           text: 'Academic Profession Ratio'
       },
       colors: ['black','red'],
      legend: {
          align:'right',
          layout:'vertical'
      },
       plotOptions: {
           series : {
               stacking : 'percent'
           }
       },
       xAxis: {
           categories: ["2000","2001","2002","2003","2004","2005","2006","2007","2008","2009","2010","2011","2012","2013"],
           title : {
               text: 'Year'
           },
           labels: {
               rotation: -45,
               align: 'right',
                style: {
                        fontSize: '13px',
                        fontFamily: 'Verdana, sans-serif'
                    }
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
           name: 'Academic',
           data: [684.47,685.59,686.26,604.83,624.87,607.43,651.82,634.61,729.93,722.51,771.33,794.00,836.16,811.60]
       },
       {
            name: 'Professional',
           data: [886.89,919.21,931.53,890.16,886.17,877.15,821.40,815.03,891.68,998.81,1007.50,1105.90,1146.15,1233.45]
       },
     
        ]
   });
   
   });