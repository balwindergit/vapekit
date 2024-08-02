<?php

function fetchImageResults($query) {
    $apiKey = 'D274338CE0AA43D183E63CB4BF9B6395';
    $apiUrl = "https://api.valueserp.com/search?api_key=$apiKey&search_type=images&q=" . urlencode($query);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    return json_decode($response, true)['image_results'];
}

function checkImageTypeAndStore($url, $filename) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 1);
    $response = curl_exec($ch);
    curl_close($ch);

	 if (strpos($response, 'content-type: image') !== false) {
	
		
        $imageData = file_get_contents($url);
        file_put_contents($filename, $imageData);
        return true;
    }

    return false;
}


if (isset($_REQUEST['i'])) {
    $query = $_REQUEST['i'];
	$query=str_replace(".jpg","",$query);
	$query = preg_replace('/[^A-Za-z0-9_\-]/', '_', $query); 
	 $filename = dirname(__file__).'/images/' . $query . '.jpg';

    if (file_exists($filename)) {
		
        header('Content-Type: image/jpeg');
        readfile($filename);
		exit;
	}
	
    $imageResults = fetchImageResults($query);
	
	
    for ($i = 0; $i < min(count($imageResults), 5); $i++) {
        $imageUrl = $imageResults[$i]['image'];
        $filename = "images/".$query . '.jpg';

        if (checkImageTypeAndStore($imageUrl, $filename)) {
            header('Content-Type: image/jpeg');
            readfile($filename);
            return;
        }
    }

	
}

 

?>
