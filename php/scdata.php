<?php
    include('connection.php');

    //Retrieving solar_voltage data from database
    $query= "SELECT  time, solar_current FROM public.performance;";
    $result = pg_query($conn, $query);
    
    // //data array 
    $data= array();
    $categories = array();

    while($row=pg_fetch_array($result)){ 
         //copy data to array data
         $data[] = $row['solar_current'];
         $categories[] = $row['time'];
     }

     pg_close($conn);
    //  Changing data to Javascript object notation to allow ease of rendering on the client side

     $chartData = json_encode($data, JSON_NUMERIC_CHECK);
     $cat_data = json_encode($categories);

    $jsCode= <<<EOD
        Highcharts.chart('scchart', {
            title: {
                text: 'Solar current against time'
            },
            xAxis: {
                categories:$cat_data,
                title:{
                    text: 'Time'
                }
            },
            yAxis: {
                title:{
                    text: 'Solar current(A)'
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
                name: 'Solar Current', 
                data: $chartData
            }]
        }); 
        EOD;
    
        echo "<script>$jsCode</script>"; 

?>
