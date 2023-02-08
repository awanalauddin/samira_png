<?php
$json_file = file_get_contents('worldBounds.json');
$json_data = json_decode($json_file, true);

foreach ($json_data['features'] as $key => $value) {
    if ($value['properties']['id'] == '2') {
        echo $json_data['features'][$key]['properties']['name'] ;
        $json_data['features'][$key]['properties']['pictureLink'] = "asdfasdfasdf";
    }
}

file_put_contents('worldBounds.json', json_encode($json_data));
?>