<?php

require 'Slim/Slim.php';
require '../php/lib.php';

$app = new Slim();

$app->get('/recent_order/:UserId', 'getRecentOrder');
$app->get('/locations',	'getLocations');
$app->get('/verify/:email/:pass', 'verifyRegistered');
/*$app->post('/wines', 'addWine');
$app->put('/wines/:id', 'updateWine');
$app->delete('/wines/:id',	'deleteWine');*/

$app->run();

function getRecentOrder($userId) {
	$sql = "SELECT t1.* FROM Orders t1 INNER JOIN (
  			SELECT max(Dates) MostRecentOrder
  			FROM Orders WHERE UserId=:UserId) t2
  			ON t1.Dates = t2.MostRecentOrder;";
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("UserId", $userId);
		$stmt->execute();  
		$order = $stmt->fetchObject();
		$db = null;
		echo '{"recent_order": ' . json_encode($order) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getLocations() {
	$sql = "SELECT * FROM Locations";
	try {
		$db = dbconnect();
		$stmt = $db->query($sql);  
		$locations = $stmt->fetchAll(PDO::FETCH_OBJ);  
		$db = null;
		echo '{"locations": ' . json_encode($locations) . '}'; 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function verifyRegistered($email, $password) {
	$sql = "SELECT * FROM Users WHERE EmailAddress=:email AND Password=:pass;";
	
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("email", $email);
		$stmt->bindParam("pass", $password);
		$stmt->execute();
		$db = null;
		if($stmt->rowCount() == 1)
			echo '{"registered": true}'; 
		else echo '{"registered": false}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
?>
