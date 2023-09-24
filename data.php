<?php
    include('connection.php');
    // Initialize variables
    $pid = 1; // Default plant_id
    $search = '';
 
    // Check if a search parameter is provided
    if (isset($_POST['search']) && !empty($_POST['search'])) {
        $search = htmlspecialchars($_POST['search']); // Need to validate this input
        
        // Query the database to get the plant_id based on the search input
        $query = "SELECT plant_id FROM public.solarpvplant WHERE plant_name LIKE '%$search%';";
        $res = pg_query($conn, $query);
        
        if ($res && pg_num_rows($res) > 0) {
            // Get the plant_id from the search results
            $row = pg_fetch_assoc($res);
            $pid = $row['plant_id'];
        } else {
            echo "No matching site found.";
            exit;
        }
    }

    // Retrieve solar performance data based on the selected plant_id
    $query = "SELECT * FROM public.performance WHERE plant_id = $pid;";
    $result = pg_query($conn, $query);

    // Data arrays
    $svdata = array();
    $scdata = array();
    $stdata = array();
    $lvdata = array();
    $lcdata = array();
    $socdata = array();
    $time = array();

    while ($row = pg_fetch_assoc($result)) {
        // Copy data to arrays
        $svdata[] = floatval($row['solar_voltage']);
        $scdata[] = floatval($row['solar_current']);
        $stdata[] = floatval($row['solar_temperature']);
        $lvdata[] = floatval($row['load_voltage']);
        $lcdata[] = floatval($row['load_current']);
        $socdata[] = floatval($row['state_of_charge']);
        $dateObj = new DateTime($row['time']);
        $time[] = $dateObj->format('H:i');
    }

    // Create an associative array to hold all the data
    $data = array(
        'solar_voltage' => $svdata,
        'solar_current' => $scdata,
        'solar_temperature' => $stdata,
        'load_voltage' => $lvdata,
        'load_current' => $lcdata,
        'state_of_charge' => $socdata,
        'time' => $time
        //'site_name' => $search
    );

    // Encode the entire data array as JSON
    $json_data = json_encode($data, JSON_NUMERIC_CHECK);

    header('Content-Type: application/json');

    // Output the JSON data
    echo $json_data;
?>