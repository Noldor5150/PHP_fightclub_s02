<?php
require '../bootloader.php';

$sensors = new \App\Sensors();
$sensortemp = new \App\SensorFartTemp();
$sensorhumidity = new \App\SensorFartHumidity();
$sensors->add('temperatura', $sensortemp);
$sensors->add('dregme', $sensorhumidity);

?>
<html>
    <head>
        <title>OOP</title>
        <link rel="stylesheet" href="/css/style.css">
    </head 
    <body>
        <?php foreach ($sensors->getReadings() as $id => $value): ?>
            <div class="katalogas">
                <h2>Sensor: <?php print $id; ?></h2>
                <h2>How much is the fish: <?php print $value; ?></h2>
            </div>
        <?php endforeach; ?>
    </body>
</html>