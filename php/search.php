<?php
    include('connection.php');

    //Retrieving plant_id data from database using text entered
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $search = $_POST['search'];
        $query= "SELECT plant_id  FROM public.solarpvplant WHERE plant_name LIKE '%$search%';";
        $result = pg_query($conn, $query);
        $plant_ids=array();
        if (pg_num_rows($result) > 0) {
            // Fetch the plant_id from the result
            $row = pg_fetch_assoc($result);
            $plantId = $row['plant_id'];

            $sql= "SELECT *  FROM public.performance WHERE plant_id = $plantId;";
            $res = pg_query($conn, $sql);
            
            echo "<table>";
            echo "<tr><th>Plant ID</th><th>Voltage</th><th>Solar Current</th></tr>";
            while ($performanceRow = pg_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>".$performanceRow['plant_id']."</td>";
                echo "<td>".$performanceRow['solar_voltage']."</td>";
                echo "<td>".$performanceRow['solar_current']."</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
        
    }

?>

