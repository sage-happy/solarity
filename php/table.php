<?php
    include('connection.php');

    $sql = "SELECT time, solar_voltage, solar_current, solar_temperature, load_voltage, load_current, state_of_charge FROM public.performance";
    $result = pg_query($conn, $sql);

    //Rendering the table headers first
    echo "<table><thead><tr><th></th><th></th><th>Solar</th><th></th><th>Load</th><th></th><th>Battery</th></tr></thead><tbody><tr><td>Time</td><td>Voltage</td><td>Current</td><td>Temperature</td><td>Voltage</td><td>Current</td><td>State"." of charge</td></tr>";
     while($row=pg_fetch_assoc($result)){
         echo "<tr><td>{$row['time']}</td><td>{$row['solar_voltage']}</td><td>{$row['solar_current']}</td><td>{$row['solar_temperature']}</td><td>{$row['load_voltage']}</td><td>{$row['load_current']}</td><td>{$row['state_of_charge']}</td></tr>";
     }
     echo "</tbody></table>";
    pg_close($conn);
?>