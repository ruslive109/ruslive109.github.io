
<?php 
$username  = "mikethefrog";
$url = 'https://api.github.com/users/treehouse';
$process = curl_init($url);
curl_setopt($process, CURLOPT_USERAGENT,$username);
curl_setopt($process, CURLOPT_RETURNTRANSFER,1);
$return = curl_exec($process);
$results = json_decode($return);
echo '<img src="' . $results->avatar_url.'"/>';
//var_dump($results);
curl_close($process);
	