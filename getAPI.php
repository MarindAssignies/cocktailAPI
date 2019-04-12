<?php
include 'form_handler.php';

function curl($url){
    // Create cache info
    $cacheKey = md5($url);
    $cachePath = './cache/'.$cacheKey;
    $cacheUsed = false;

    // Cache available
    if((file_exists($cachePath) && time() - filemtime($cachePath) < 3600) && !isset($_GET['random']))
    {
        $result = file_get_contents($cachePath);
        $cacheUsed = true;
    }

    // Cache not available
    else
    {
        // Make request to API
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);

        $result = curl_exec($curl);
        curl_close($curl);

        // Save in cache
        file_put_contents($cachePath, $result);
    }

    // Decode JSON
    return $result = json_decode($result);
}

// Define name
$name = empty($_GET['name']) ? '' : $_GET['name'];

// Define ingredient
$ingredient = empty($_GET['ingredients']) ? '' : $_GET['ingredients'];

$type = empty($_GET['type']) ? '' : $_GET['type'];

// Search by id 
$cocktailId = empty($_GET['cocktailId']) ? '11007'  :$_GET['cocktailId'];


// Create API url searching by ingredient

function ingUrl($ingredient)
{
    $url = "http://www.thecocktaildb.com/api/json/v2/8673533/filter.php?";
    $url .= http_build_query([
        'i' => $ingredient
    ]);
    return curl($url);
}

// Create API url searching by type

function typeUrl($type)
{
    
    $url = "http://www.thecocktaildb.com/api/json/v2/8673533/filter.php?";
    $url .= http_build_query([
        'a' => $type
    ]);
    return curl($url);
}

// Create API url searching by name

function nameUrl($name)
{
    $url = "https://www.thecocktaildb.com/api/json/v1/1/search.php?";
    $url .= http_build_query([
        's' => $name
    ]);

    return curl($url);
}

// Create API url searching by id
function idUrl($cocktailId)
{
    $url = "https://www.thecocktaildb.com/api/json/v2/8673533/lookup.php?";
    $url .= http_build_query([
        'i' => $cocktailId
    ]);
}

// Create API url for similar recipe
function similar($similar)
{
    $url = "https://www.thecocktaildb.com/api/json/v2/8673533/filter.php?";
    $url .= http_build_query([
    'i' => $similar
    ]);
}

// Call the functions
function initSearch($ingredient, $type)
{
    if(!empty($_GET['ingredients'])) 
    {
        return ingUrl($ingredient);
    }
    else if( (!empty($_GET['type'])) ) 
    {
        return typeUrl($type);
    }
}
$result = initSearch($ingredient, $type);

?>