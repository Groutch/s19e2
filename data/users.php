<?php
require_once(__DIR__.'/../models/Client.php');
$client1 = new Client("Groutch","mail1@mail.com");
$client2 = new Client("Urizen","mail2@mail.com");

return [$client1,$client2];