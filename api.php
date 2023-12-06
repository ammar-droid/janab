<?php
// Receive parking data from ESP32
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = file_get_contents('php://input');
    $decodedData = json_decode($data, true);

    // Process the data as needed
    $cityParking = $decodedData['cityParking'];
    $downtownParking = $decodedData['downtownParking'];

    // You can store the data in a database or perform any other actions here
    // For now, just printing the received data
    echo "Received Data: City Parking - $cityParking, Downtown Parking - $downtownParking";
} else {
    // Handle other HTTP methods or display your website content
    // ...
}
?>
