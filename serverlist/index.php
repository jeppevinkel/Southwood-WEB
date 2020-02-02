<?php
date_default_timezone_set('CET');
header('Content-Type: application/json');

include '../secrets/mysql-secrets.php';

$mysqli = new mysqli($db_servername, $db_username, $db_password, $db_dbname);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$servers = array();

$query = $mysqli->prepare("SELECT * FROM servers");
$query->execute();
$result = $query->get_result();

while ($row = $result->fetch_assoc()) {
	$server = array();

	$server['ip'] = $row['address'];
	$server['port'] = $row['connection_port'];
	$server['info'] = $row['info'];
	$server['pastebin'] = $row['pastebin'];
	$server['players'] = $row['players'];
	$server['playerlist'] = $row['playerlist'];
	$server['version'] = $row['server_version'];
	$server['lastUpdate'] = $row['last_request'];
	$server['privateBeta'] = $row['private_beta'];
	$server['staffRA'] = $row['staff_ra'];
	$server['friendlyFire'] = $row['friendly_fire'];
	$server['geoblocking'] = $row['geoblocking'];
	$server['modded'] = $row['modded'];
	$server['whitelist'] = $row['whitelist'];
	$server['accessRestrictions'] = $row['access_restrictions'];
	$server['emailSet'] = $row['email_set'];
	$server['enforceSameIp'] = $row['enforce_same_ip'];
	$server['enforceSameAsn'] = $row['enforce_same_asn'];

	array_push($servers, $server);
}

$userAgent = 'Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0';
 
$ch = curl_init( 'https://api.scpslgame.com/lobbylist.php?format=json' );
curl_setopt( $ch, CURLOPT_USERAGENT, $userAgent );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER , true );

$officialServerList = curl_exec($ch);

$obj = json_decode($officialServerList);

curl_close($ch);

$bigList = array_merge($servers, $obj);

//var_dump($servers);
echo json_encode($bigList);

?>