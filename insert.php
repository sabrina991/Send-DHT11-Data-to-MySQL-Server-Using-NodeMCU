<?php
if (isset($_GET["t"]) && isset($_GET["h"]) && isset($_GET["d"])) {
    $t = $_GET["t"];
    $h = $_GET["h"];
    $d = $_GET["d"];
    $db = new mysqli("localhost", "root", "", "temphumidnew");
    $sql="INSERT INTO `dht11`(`humidity`, `temperature`, `date`) VALUES ($t,$h,$d)";
    $db->query($sql);
}