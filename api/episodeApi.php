<?php
header('Access-Control-Allow-Origin: *');
header("Content-type:application/json");
$conn = new mysqli("localhost", "root", "", "podtalk");
$sql = "SELECT * FROM latest_episode";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}
echo json_encode($data);
