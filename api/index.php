<?php

require 'Slim/Slim.php';

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
		$db = getConnection();
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
		$db = getConnection();
		$stmt = $db->query($sql);  
		//$stmt->bindParam("id", $id);
		//$stmt->execute();
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
		$db = getConnection();
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
/*
function updateWine($id) {
	$request = Slim::getInstance()->request();
	$body = $request->getBody();
	$wine = json_decode($body);
	$sql = "UPDATE wine SET name=:name, grapes=:grapes, country=:country, region=:region, year=:year, description=:description WHERE id=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("name", $wine->name);
		$stmt->bindParam("grapes", $wine->grapes);
		$stmt->bindParam("country", $wine->country);
		$stmt->bindParam("region", $wine->region);
		$stmt->bindParam("year", $wine->year);
		$stmt->bindParam("description", $wine->description);
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
		echo json_encode($wine); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function deleteWine($id) {
	$sql = "DELETE FROM wine WHERE id=:id";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("id", $id);
		$stmt->execute();
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function findByName($query) {
	$sql = "SELECT * FROM wine WHERE UPPER(name) LIKE :query ORDER BY name";
	try {
		$db = getConnection();
		$stmt = $db->prepare($sql);
		$query = "%".$query."%";  
		$stmt->bindParam("query", $query);
		$stmt->execute();
		$wines = $stmt->fetchAll(PDO::FETCH_OBJ);
		$db = null;
		echo '{"wine": ' . json_encode($wines) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}
*/
function getConnection() {
	$dbuser="root";
	$dbpass="password";
	$dbh = new PDO("mysql:host=localhost;dbname=tacotruck;charset=utf8", $dbuser, $dbpass);	
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return $dbh;
}

?>
