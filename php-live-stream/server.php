<?php

$server = new swoole_websocket_server("10.20.20.25", 22);

$server->on("open", function (swoole_websocket_server $server, $request) {
    echo "Server: handshake success with fd{$request->fd}\n";
});

$server->on("message", function (swoole_websocket_server $server, $frame) {
    echo "Receive from {$frame->fd}\n";
    $data = $frame->data;

    foreach ($server->connections as $fd) {
        $server->push($fd, $data);
    }
});

$server->on("close", function ($server, $fd) {
    echo "Client {$fd} closed\n";
});

$server->start();