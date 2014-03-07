<?php

require 'Slim/Slim.php';
require '../php/lib.php';

$app = new Slim();

$app->get('/recent_order/:email', 'getRecentOrder');
$app->get('/locations',	'getLocations');
$app->get('/verify/:email/:pass', 'verifyRegistered');
$app->get('/menu/:itemType', 'getMenuItems');
$app->get('/registered/:email', 'checkIfRegistered');
$app->post('/register', 'registerUser');
$app->get('/fixin_price/:name', 'getFixinPrice');

$app->run();

function getRecentOrder($email) {
	$sqlID = "SELECT UserId FROM Users WHERE EmailAddress=:email";
	$sqlOrder = "SELECT t1.* FROM Orders t1 INNER JOIN (
  				SELECT max(Dates) MostRecentOrder
  				FROM Orders WHERE UserId=:UserId) t2
  				ON t1.Dates = t2.MostRecentOrder";
	$sqlOrderItem = "SELECT OrderItemId, Quantity FROM OrderItem WHERE OrderId=:orderId";
	$sqlOrderItemDetails = "SELECT TacoFixinId From OrderItemDetails WHERE OrderItemId=:orderItemId";
	$sqlTacoFixins = "SELECT name FROM Menu WHERE TacoFixinId=:fixinId";
	try {
		$db = dbconnect();
		$stmtID = $db->prepare($sqlID);
		$stmtID->bindParam("email", $email);
		$stmtID->execute();  
		$uID = $stmtID->fetch(PDO::FETCH_ASSOC);
		$userID = $uID['UserId'];
		
		$stmtOrder = $db->prepare($sqlOrder);
		$stmtOrder->bindParam("UserId", $userID);
		$stmtOrder->execute();
		$order = $stmtOrder->fetch(PDO::FETCH_ASSOC);	
		$orderDate = $order['Dates'];
		$orderTotal = $order['Total'];
		$orderId = $order['OrderId'];
		
		$stmtOrderItem = $db->prepare($sqlOrderItem);
		$stmtOrderItem->bindParam("orderId", $orderId);
		$stmtOrderItem->execute();

		$jsonTacos = '';
		
		
		for($i = 0; $i < $stmtOrderItem->rowCount(); $i++) {
			$orderItem = $stmtOrderItem->fetch(PDO::FETCH_ASSOC);
			$orderItemId = $orderItem['OrderItemId'];
			$jsonTacos = $jsonTacos . '{"OrderItemId":"' . $orderItemId . '","Quantity":"' 
					. $orderItem['Quantity'] . '","TacoFixins":[';
			$stmtOrderItemDetails = $db->prepare($sqlOrderItemDetails);
			$stmtOrderItemDetails->bindParam("orderItemId", $orderItemId);
			$stmtOrderItemDetails->execute();
			for($j = 0; $j < $stmtOrderItemDetails->rowCount(); $j++) {
				$orderItemDetail = $stmtOrderItemDetails->fetch(PDO::FETCH_ASSOC);
				$fixinId = $orderItemDetail['TacoFixinId'];
				$stmtTacoFixins = $db->prepare($sqlTacoFixins);
				$stmtTacoFixins->bindParam("fixinId", $fixinId);
				$stmtTacoFixins->execute();
				$fixinName = $stmtTacoFixins->fetch(PDO::FETCH_ASSOC);
				$jsonTacos = $jsonTacos . '{"name":"' . $fixinName['name'] . '"';
				if($stmtOrderItemDetails->rowCount() - $j == 1) 
					$jsonTacos = $jsonTacos . '}';	
				else 
					$jsonTacos = $jsonTacos . '},';
			}
			if($stmtOrderItem->rowCount() - $i == 1) 
				$jsonTacos = $jsonTacos . ']}';	
			else 
				$jsonTacos = $jsonTacos . ']},';
		}
		
		
		
		$db = null;
		echo '{"recent_order": {"date_time":"' .$orderDate. '","total":"' .$orderTotal. '","tacos":[' . $jsonTacos . ']}}';
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
	$sql = "SELECT * FROM Users WHERE EmailAddress=:email";
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("email", $email);
		$stmt->execute();
		if($stmt->rowCount() == 1) {
			$userInfo = $stmt->fetch(PDO::FETCH_ASSOC);
			if(password_verify($password, $userInfo['Password']))
				echo '{"registered": true}';
			else echo '{"registered": false}';	
		}
		else echo '{"registered": false}';
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function getMenuItems($itemType) {
	$sql = "SELECT * FROM Menu WHERE itemType=:itemType";
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);   
		$stmt->bindParam("itemType", $itemType);
		$stmt->execute();
		$item = $stmt->fetchAll(PDO::FETCH_OBJ);  
		$db = null;
		echo json_encode($item); 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function checkIfRegistered($email) {
	$sql = "SELECT * FROM Users WHERE EmailAddress=:email";

	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("email", $email);
		$stmt->execute();  
		if($stmt->rowCount() > 0)
			echo '{"email_registered": true}';  
		else 
			echo '{"email_registered": false}';
		$db = null;
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}

function registerUser() {
	error_log('addUser\n', 3, '/var/tmp/php.log');
	$request = Slim::getInstance()->request();
	$user = json_decode($request->getBody());
	$pass = password_hash($user->pw, PASSWORD_DEFAULT);
	$sql = "INSERT INTO Users VALUES (DEFAULT, :fName, :lName, :email, :pw, :tele, :ccp, :ccnum)";
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);   
		$stmt->bindParam("fName", $user->fName);
		$stmt->bindParam("lName", $user->lName);
		$stmt->bindParam("email", $user->email);
		$stmt->bindParam("pw", $pass);
		$stmt->bindParam("tele", $user->tele);
		$stmt->bindParam("ccp", $user->ccp);
		$stmt->bindParam("ccnum", $user->ccnum);
	       	$stmt->execute();
		$db = null; 
		echo json_encode($user); 
	} catch(PDOException $e) {
		error_log($e->getMessage(), 3, '/var/tmp/php.log');
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
	
}

function getFixinPrice($name) {
	$sql = "SELECT price FROM Menu WHERE name=:name";
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);
		$stmt->bindParam("name", $name);
		$stmt->execute();
		$price = $stmt->fetchAll(PDO::FETCH_OBJ); 
		$db = null;
		echo '{"price": ' . json_encode($price) . '}';
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() . '}}';
	}
}
?>
