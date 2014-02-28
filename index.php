<?php
	require 'vendor/autoload.php';
	require 'Slim/Slim.php';

$app = new Slim();

$app->get('/orders', 'getOrders');
/*$app->get('/wines/:id',	'getWine');
$app->get('/wines/search/:query', 'findByName');
$app->post('/wines', 'addWine');
$app->put('/wines/:id', 'updateWine');
$app->delete('/wines/:id',	'deleteWine');*/

$app->run();

function getOrders() {
	$sql = "SELECT * FROM orders ORDER BY name";
	try {
		$db = getConnection();
		$stmt = $db->query($sql);
		$orders = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
	}
	catch(PDOException $e) {
		echo "error:" . e->getMessage();
	}
}
?>

<HTML>
<HEAD>
	<TITLE>Taco Truck</TITLE>
</HEAD>
<BODY>
	<H1>Hello World!</H1>
</BODY>
</HTML>
