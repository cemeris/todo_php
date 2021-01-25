<?php
header('Content-Type: application/json');
$data = $_REQUEST;

if (isset($data['action'])) {
    if ($data['action'] == 'get'){
        echo get();
    }
    elseif ($data['action'] == 'update' && isset($data['todos'])){
        echo update($data['todos']);
    }
    else {
        echo error("wrong data");
    }
}
else {
    echo error();
}


function update($todos) {
    $file_name = 'json_database';
    file_put_contents($file_name, json_encode($todos));
}

function get() {
    $file_name = 'json_database';
    if (file_exists($file_name)) {
        return json_decode(file_get_contents($file_name));
    }
    return error('DB file does not exist');
}

function error($msg = 'wrong request') {
    return json_encode([
        'status' => 'error',
        'message' => $msg
    ]);
}