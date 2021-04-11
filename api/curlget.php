<?php
    $ch = curl_init();
    $api = "https://www.vaccinespotter.org/api/v0/states/NY.json";
    
    curl_setopt($ch, CURLOPT_URL, $api);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    
    $resp = curl_exec($ch);

    if($e = curl_error($ch)){
        echo $e;
    }
    else {
        $decoded = json_decode($resp);
        echo "There are currently " . $decoded[0];
    }

    curl_close($ch);

    //https://www.vaccinespotter.org/api/v0/states/NY.json
    