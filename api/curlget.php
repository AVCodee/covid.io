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
        $x=0;

        foreach ($decoded->features as $value){
            if ($decoded->features[$x]->properties->postal_code != 12901){
                $x+=1;
            }
            else{
                print_r($decoded->features[$x]->properties->city);
                echo "\n";
                echo "This one";
                break;
            }
        }
        
       
    }
        
        
    
        
    

    curl_close($ch);

    