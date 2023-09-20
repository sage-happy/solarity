<?php
    include('connection.php');

    //Retrieving solar_voltage data from database
    $query= "SELECT time, solar_voltage FROM public.performance;";
    $result = pg_query($conn, $query);

    // //data array 
    $data= array();
    $categories = array();

    while($row=pg_fetch_array($result)){ 
         //copy data to array data
         $data[] = $row['solar_voltage'];
         $categories[] = $row['time'];
     }

     $chartData = json_encode($data, JSON_NUMERIC_CHECK);
     $cat_data = json_encode($categories);

     $cat_data_array = json_decode($cat_data, true);

     echo "data fetched-------------";
     // Print the resulting array
     print_r($cat_data_array);

// // Send the data to all connected clients
// foreach ($this->clients as $client) {
//     $client->send($chartData);
// }
     //$cat_data=array_merge(array_slice($cat_data, 0, 5), array_slice($cat_data, 9));
    $jsCode= <<<EOD
        var chart=Highcharts.chart('svchart', {
            title: {
                text: 'Solar voltage against time'
            },
            xAxis: {
                categories:$cat_data,
                title:{
                    text: 'Time'
                }
            },
            yAxis: {
                title:{
                    text: 'Solar voltage(V)'
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
                name: 'Solar Voltage', 
                data: $chartData
            }]
        }); 
        
        function update(){
            console.log($chartData);
            chart.series[0].setData($chartData);
            console.log('After updating');
        }
        setTimeout(update, 3000);
        EOD;
        
        echo "<script>$jsCode</script>"; 

?>
