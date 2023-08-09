<?php
    include('connection.php');

    //Retrieving solar_voltage data from database
    $query= "SELECT  time, load_voltage FROM public.performance;";
    $result = pg_query($conn, $query);

    // //data array 
    $data= array();
    $categories = array();

    while($row=pg_fetch_array($result)){ 
         //copy data to array data
         $data[] = $row['load_voltage'];
         $categories[] = $row['time'];
     }
    pg_close($conn);
    //  echo $y_val."<br><br><br>";

     $chartData = json_encode($data, JSON_NUMERIC_CHECK);
     $cat_data = json_encode($categories);
    
    $jsCode= <<<EOD
        Highcharts.chart('lvchart', {
            title: {
                text: 'Load voltage against time'
            },
            xAxis: {
                categories:$cat_data,
                title:{
                    text: 'Time'
                }
            },
            yAxis: {
                title:{
                    text: 'Load voltage(V)'
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
                name: 'Load Voltage', 
                data: $chartData
            }]
        }); 
        EOD;
    
        echo "<script>$jsCode</script>"; 

?>
