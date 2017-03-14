<?php

require __DIR__ . '/vendor/autoload.php';

use SteamCondenser\Servers\SourceServer;
use SteamCondenser\Servers\MasterServer;

$master = new MasterServer( MasterServer::SOURCE_MASTER_SERVER );
$servers = $master->getServers(MasterServer::REGION_ALL, "\\gamedir\\zombie_master");

?>

<!doctype html>
<html class="no-js" lang="fr">
<head>
    <meta charset="UTF-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>ZM server list</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" media="all">
    <link rel="stylesheet" href="css/style.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Zombie Master Server List</h1>
        <hr>
        <table class="table table-striped">
            <thead class="thead-default">
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Map</th>
                <th>Users</th>
                <th>Ping</th>
            </tr>
            </thead>
            <tbody>
    <?php

    foreach ($servers as $serv) {
        $address = $serv[0];
        $port = $serv[1];

        $server = new SourceServer($address, $port);
        $server->initialize();

        $servInfo = $server->getServerInfo();

        echo '<tr>';
        echo '<th><a href="steam: %22-applaunch '.$servInfo['appId'].' +connect '.$address.':'.$port.'%22">'.$servInfo['serverName'].'</a></th>';
        echo '<td>'.$address.':'.$port.'</td>';
        echo '<td>'.$servInfo['mapName'].'</td>';
        echo '<td>'.$servInfo['numberOfPlayers'].'/'.$servInfo['maxPlayers'].'</td>';
        echo '<td>'.$server->getPing().'</td>';
        echo '</tr>';
    }

    ?>
            </tbody>
        </table>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>


