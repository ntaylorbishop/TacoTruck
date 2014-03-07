<?php

require 'Slim/Slim.php';
require '../php/lib.php';

$app = new Slim();

$app->get('/recent_order/:email', 'getRecentOrder');
$app->get('/locations',	'getLocations');
$app->get('/verify/:email/:pass', 'verifyRegistered');
$app->get('/menu/:itemType', 'getMenuItems');
//$app->post('/register/:fName/:lName/:email/:pw/:tele/:ccp/:ccnum', 'registerUser');

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
	$sql = "SELECT * FROM Users WHERE EmailAddress=:email AND Password=:pass;";
	
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("email", $email);
		$stmt->bindParam("pass", $password);
		$stmt->execute();
		$db = null;
		if($stmt->rowCount() == 1) {
			echo '{"registered": true}'; 
			
		}
		else echo '{"registered": false}';
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
/*
function registerUser($fName, $lName, $email, $pw, $tele, $ccp, $ccnum) {
	echo 'boomboom';
	$sql = "SELECT * FROM Users WHERE EmailAddress=:email";
	echo 'boomboom';
	try {
		$db = dbconnect();
		$stmt = $db->prepare($sql);  
		$stmt->bindParam("email", $email);
		$stmt->execute();  
		if($stmt->rowCount() == 1)
			echo 'true';   
		else {
			echo 'boomboom';
			$sql = "INSERT INTO Users VALUES (':fName',':lName',':email',':pw','tele',':ccp', ':ccnum')";
			$stmt = $db->prepare($sql);
			$stmt->bindParam("fName", $fName);
			$stmt->bindParam("lName", $lName);
			$stmt->bindParam("email", $email);
			$stmt->bindParam("pw", $pw);
			$stmt->bindParam("tele", $tele);
			$stmt->bindParam("ccp", $ccp);
			$stmt->bindParam("ccnum", $ccnum);
                        $stmt->execute();
                        echo 'false';
		}
		$db = null; 
	} catch(PDOException $e) {
		echo '{"error":{"text":'. $e->getMessage() .'}}'; 
	}
}*/
?>
