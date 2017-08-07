<?PHP

$data = array("name" => "Nagaraj", "ID" => 12345);
header('Content-Type: application/json');
echo json_encode($data);

?>