<?php

include('connect.php');

$query = 'SELECT *
    FROM colours
    ORDER BY name';
$result = mysqli_query($connect, $query);

$data = array();

$data['error'] = 0;
$data['message'] = 'Colours loaded successfully';
$data['records'] = mysqli_num_rows($result);

while($record = mysqli_fetch_assoc($result))
{

    $data['colours'][] = $record;

}

header('Content-Type: application/json; charset=utf-8');
echo json_encode($data);