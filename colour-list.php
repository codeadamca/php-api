<?php

include('connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP API</title>
</head>
<body>

<h1>PHP API</h1>

<?php

$query = 'SELECT *
    FROM colours
    ORDER BY name';
$result = mysqli_query($connect, $query);

?>

<?php while($record = mysqli_fetch_assoc($result)): ?>

    <h2><?=$record['name']?></h2>
    <div style="width: 200px; height: 200px; background: <?=$record['rgb']?>"></div>

<?php endwhile; ?>
    
</body>
</html>