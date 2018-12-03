<?
header("Content-Type: application/x-javascript");
$hash = "bx_random_hash";
$config = array("appmap" =>
	array("main" => "kizlyarshop111",
		"left" => "/kizlyarshop111/left.php",
		"right" => "/kizlyarshop111/right.php",
		"settings" => "/kizlyarshop111/settings.php",
		"hash" => substr($hash, rand(1, strlen($hash)))
	)
);
echo json_encode($config);
?>