<?php
    include('connection.php');

    //Retrieving solar_voltage data from database
    $query= "SELECT  time, solar_temperature FROM public.performance;";
    $result = pg_query($conn, $query);

    // //data array 
    $data= array();
    $categories = array();

    while($row=pg_fetch_array($result)){ 
         //copy data to array data
         $data[] = $row['solar_temperature'];
         $categories[] = $row['time'];
     }
    pg_close($conn);

     $chartData = json_encode($data, JSON_NUMERIC_CHECK);
     $cat_data = json_encode($categories);
    
    $jsCode= <<<EOD
        Highcharts.chart('stchart', {
            title: {
                text: 'Solar temperature against time'
            },
            xAxis: {
                categories:$cat_data,
                title:{
                    text: 'Time'
                }
            },
            yAxis: {
                title:{
                    text: 'Solar temperature(°C)'
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
                name: 'Solar temperature', 
                data: $chartData
            }]
        }); 
        EOD;
    
        echo "<script>$jsCode</script>"; 

?>
