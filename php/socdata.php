<?php
    include('connection.php');

    //Retrieving solar_voltage data from database
    $query= "SELECT time, state_of_charge FROM public.performance;";
    $result = pg_query($conn, $query);

    // //data array 
    $data= array();
    $categories = array();

    while($row=pg_fetch_array($result)){ 
         //copy data to array data
         $data[] = $row['state_of_charge'];
         $categories[] = $row['time'];
     }
   pg_close($conn);
    
   //  Encoding data in javascript object notation
     $chartData = json_encode($data, JSON_NUMERIC_CHECK);
     $cat_data = json_encode($categories);

    $jsCode= <<<EOD
        Highcharts.chart('socchart', {
            title: {
                text: 'Battery state of charge against time'
            },
            xAxis: {
                categories:$cat_data,
                title:{
                    text: 'Time'
                }
            },
            yAxis: {
                title:{
                    text: 'state of charge(V)'
                }
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                }
            },
            series:[{
                type: 'spline',
                name: 'State of charge', 
                data: $chartData
            }]
        }); 
        EOD;
    
        echo "<script>$jsCode</script>"; 

?>
