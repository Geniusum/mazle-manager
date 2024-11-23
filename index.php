<?php

header('Content-Type: application/json');

include "connect.php";

$response = [
	"error" => NULL
];

try {
	$command = $_GET["command"];
} catch {
	$response["error"] = "Command not in the request.";
}

switch ($command) {
	case "mazle":
		$response["mazle"] = $conf["mazle"];
		break;
	default:
		$response["error"] = "Command not found.";
		break;
}

echo json_encode($response);
